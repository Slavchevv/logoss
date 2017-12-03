<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Storage;
use App\Upload;
class UploadController extends Controller
{

    public function index()
    {
        return view('upload');
    }

    public function uploads()
    {
        //return Upload::all();
        //$uploads = Upload::all();
        $uploads = Upload::orderBy('name','desc')->paginate(1);//do it th order by date
        return view('uploads')->with('uploads',$uploads);
    }

    public function show($id)
    {
        $upload = Upload::find($id);
        return view('show')->with('upload',$upload);
    }

    public function imageUpload()
    {
        return view('upload-file');
    }


    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            /*'text' => 'required|max:2048',*/
            'title'=> 'required',
            'author'=> 'required',
            'description'=> 'required',

        ]);



        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $textFileName = time().'.'.$request->text_file->getClientOriginalExtension();
        $image = $request->file('image');
        $text_file = $request->file('text_file');
        $t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
        $tf = Storage::disk('s3')->put($textFileName, file_get_contents($text_file), 'public');
        $imageName = Storage::disk('s3')->url($imageName);
        $textFileName = Storage::disk('s3')->url($textFileName);



        $upload = new Upload;
        $upload->name = $request->input('title');
        $upload->description = $request->input('description');
        //$upload->description = $request->input('desc');author
        $upload->imgURL = $imageName;
        $upload->txtURL = $textFileName;
        $upload->save();
        return redirect('/uploads');
        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }

    /*echo 123;
       $s3 = Storage::disk('s3');
       $s3->put('myfile.txt','my file!','public');*/
}
