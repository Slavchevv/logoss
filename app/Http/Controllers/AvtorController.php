<?php

namespace App\Http\Controllers;

use App\Avtor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AvtorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //$author = Avtor::find($id);
        $author = Avtor::find($id);
        $topfive = DB::select("Select id, name, uploads From ( Select u.id, u.name , SUM(downloads) as uploads, a.id as avtor_id From avtors as a INNER join uploads as u on a.id=u.avtor_id Group by u.id, u.name, a.id )as t where avtor_id = '$id' Order by uploads desc Limit 5");

        //return view('author')->with('author',$author);

        return view('author',compact('topfive', 'author'));
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
    public function update(Request $request, $id)
    {
        //
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
