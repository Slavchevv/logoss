<?php

namespace App\Http\Controllers;

use App\Avtor;
use App\PAdmin;
use Illuminate\Http\Request;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
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

    public function books()
    {

        $books = Upload::orderBy('name', 'asc')->get();

        return view('books')->with('books',$books);
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
        //$user_id = auth()->user('id');
/*        $user_id = Auth::id();
        $uploads = Upload::whereHas('user', function ($query) use($user_id) {
            $query->where('id', $user_id);
        })->get();
        foreach ( $uploads  as  $upload) {
            $author = Avtor::where('id', $upload->avtor_id)->get();
            foreach ( $author  as  $auth) {
                $upload->avtor_id = $auth->name;
            }
        }
        /*->paginate(5);*/
        //$uploads->items();

       // dd($uploads);*/
        //$user_id = Auth::id();//needed later
        //dd($user_id);
       // $isAdmin = PAdmin::where('user_id',$user_id)->get();//needed later
        $uploads = Auth::user()->upload()->with('author')->paginate(5);

        //$uploads = Upload::with('author')->where('user_id', auth()->id())->get();
        //$uploads = auth()->user()->load(['upload', 'upload.author'])->get();
       //dd(auth()->user());
        //dd($uploads);
        return view('uploads')->with('uploads',$uploads);
    }
    public function author_works()
    {

        $uploads= Upload::where('avtor_id', 3)->get();
        //dd($uploads);
        return view('author-works')->with('uploads',$uploads);
    }



    public function show($id)
    {
        $uploads = Upload::where('id',$id)->with('author')->get();
       //dd($uploads[0]);
        $avtorID=$uploads[0]['attributes']['avtor_id'];
        /* dd($avtorID);*/
        // category = SELECT ca.id, ca.name from categories as ca inner join category_upload as cu on ca.id = cu.category_id where cu.upload_id = 1
        //$upload = Upload::find($id);
        //dd($uploads);
        $author= Avtor::find($avtorID);
        //dd($author);
        $categories = DB::select('SELECT ca.id, ca.name from categories as ca inner join category_upload as cu on ca.id = cu.category_id where cu.upload_id ='.$id);
        // dd($categories);

        $topfive = DB::select("Select id, name, uploads From ( Select u.id, u.name , SUM(downloads) as uploads, a.id as avtor_id From avtors as a INNER join uploads as u on a.id=u.avtor_id Group by u.id, u.name, a.id )as t where avtor_id = '$avtorID' Order by uploads desc Limit 5");
        // dd($topfive);
            //Select id, name, uploads From ( Select u.id, u.name , SUM(downloads) as uploads, a.id as avtor_id From avtors as a INNER join uploads as u on a.id=u.avtor_id Group by u.id, u.name, a.id )as t where avtor_id = 1 Order by uploads desc Limit 5

        return view('show',compact('uploads','categories','topfive', 'author'));
       // return view('show')->with('upload',$upload);
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
        $upload->status = -1;
        $upload-> downloads = 0;
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
    public function save_book(Request $request, $id)
    {
        //type 0 is book type 1 is favorite
        //dd($id);
        $upload_id = $id;
        $user_id = Auth::id();

        //$categories = DB::select('SELECT ca.id, ca.name from categories as ca inner join category_upload as cu on ca.id = cu.category_id where cu.upload_id ='.$id);
        DB::insert('insert into upload_user (upload_id,user_id,type) values (?, ?,?)', [$upload_id,$user_id,0]);


    }
    public function save_favorite(Request $request, $id)
    {
        $upload_id = $id;
        $user_id = Auth::id();

        //$categories = DB::select('SELECT ca.id, ca.name from categories as ca inner join category_upload as cu on ca.id = cu.category_id where cu.upload_id ='.$id);
        DB::insert('insert into upload_user (upload_id,user_id,type) values (?, ?,?)', [$upload_id,$user_id,1]);


    }
    public function follow_author(Request $request, $id)
    {

    }

}

