<?php

namespace App\Http\Controllers;

use App\Upload;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
    }

    public function manage()
    {

      /*  @if ($upload->status === -1)
                    <h5> <span class="badge badge-pill badge-warning">Pending</span></h5>
    @elseif ($upload->status === 0)

                @elseif ($upload->status === 1)
    <h5> <span class="badge badge-pill badge-danger">Rejected</span></h5>
    @endif*/
        $uploads= Upload::all();
        //dd($pending,$approved,$rejected);
        return view('manage')->with('uploads',$uploads);;
    }
    public function manage_pending()
    {

        $pending = Upload::where('status',-1)->get();

        return view('pending')->with('pending',$pending);;;
    }
    public function manage_approved()
    {

        $approved = Upload::where('status',0)->get();

        return view('approved')->with('approved',$approved);;
    }

    public function manage_rejected()
    {

        $rejected = Upload::where('status',1)->get();

        //dd($pending,$approved,$rejected);
        return view('rejected')->with('rejected',$rejected);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id,$status)
    {
        dd($id);



        /*$upload = Upload::find($id);
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
            ->with('path',$imageName);*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
