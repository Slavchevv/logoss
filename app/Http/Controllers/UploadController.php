<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Storage;
use App\Upload;
use App\User;

use Illuminate\Support\Facades\Auth;
class UploadController extends Controller

{

    public function index()
    {
        return view('upload');
    }

  /*  public function uploads()
    {
        //return Upload::all();
        //$uploads = Upload::all();

        //$uploads = Upload::orderBy('name','desc')->paginate(1);//do it th order by date
        $user_id = auth()->user('id');
        $user = User::find($user_id);
        $user = User::whereId($user_id)->with('uploads')->first();
        //return view('uploads')->with('uploads',$uploads);
        return view('uploads')->with('uploads',$user->uploads);
    }*/
    public function uploads()
    {
        $user_id = auth()->user('id');
        $user_id = Auth::id();
        $uploads = Upload::whereHas('user', function ($query) use($user_id) {
            $query->where('id', $user_id);
        })
            ->paginate(10);
        return view('uploads')->with('uploads',$uploads);
    }
    public function author_works()
    {

        $uploads= Upload::where('avtor_id', 3)->first();
        dd($uploads);
        return view('author-works')->with('uploads',$uploads);
    }

    public function show($id)
    {
        $upload = Upload::find($id);
        return view('show')->with('upload',$upload);
    }

    public function edit($id)
    {
        $upload = Upload::find($id);
        return view('edit')->with('upload',$upload);
    }
    public function update(Request $request, $id)
    {
        //$upload = Upload::find($id);
        //return view('show')->with('upload',$upload);
        $this->validate($request, [
          /* 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',*/
            /*'text' => 'required|max:2048',*/
            'title'=> 'required',
            'author'=> 'required',
            'description'=> 'required',

        ]);



       /* $imageName = time().'.'.$request->image->getClientOriginalExtension();
        $textFileName = time().'.'.$request->text_file->getClientOriginalExtension();
        $image = $request->file('image');
        $text_file = $request->file('text_file');
        $t = Storage::disk('s3')->put($imageName, file_get_contents($image), 'public');
        $tf = Storage::disk('s3')->put($textFileName, file_get_contents($text_file), 'public');
        $imageName = Storage::disk('s3')->url($imageName);
        $textFileName = Storage::disk('s3')->url($textFileName);*/



        $upload = Upload::find($id);
        $upload->name = $request->input('title');
        $upload->description = $request->input('description');
        $upload->description = $request->input('description');
        //$user_id = auth()->user('id');
        //$upload->user_id = Auth::id();
        //$upload->description = $request->input('desc');author
        //$upload->imgURL = $imageName;
        //$upload->txtURL = $textFileName;
        $upload->save();
        return redirect('/uploads');
        return back()
            ->with('success','Image Uploaded successfully.')
            ->with('path',$imageName);
    }
    public function destroy($id)
    {
        $upload = Upload::find($id);
        $upload->delete();
        return redirect('/uploads');
        return view('edit')->with('upload',$upload);
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
        //$upload->user_id = auth()->user()->id();

        $upload->user_id = Auth::id();
        $upload->avtor_id = Auth::id();
        //dd($upload);
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

