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
        $uploads = Upload::all();
        return view('uploads')->with('uploads',$uploads);
    }
 
    public function imageUpload()
    {
        return view('upload-file');
    }


    public function imageUploadPost(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'text_file' => 'required|max:2048',

        ]);

        $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $textFileName = time().'.'.$request->text_file->getClientOriginalExtension();
        $image = $request->file('image');
        $text_file = $request->file('text_file');
        $t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
        $tf = Storage::disk('s3')->put($textFileName, file_get_contents($text_file), 'public');
        $imageName = Storage::disk('s3')->url($imageName);
        $textFileName = Storage::disk('s3')->url($textFileName);
        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }

    /*echo 123;
       $s3 = Storage::disk('s3');
       $s3->put('myfile.txt','my file!','public');*/
}
