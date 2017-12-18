<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   //$books_category = Category::where('name','History')->with('uploads')->get();
        $books_category = Category::select("*")->with(['downloads' => function($q){
            $q->oderBy('downloads','desc')->take(10)->get();
        }]);
/*        Select category_id, uploads
From (
    Select category_id, SUM(downloads) as uploads
    From uploads as u
    INNER join category_upload as uc on uc.upload_id=u.id
    INNER join categories as c on c.id=uc.category_id
    Group by  category_id    )as t
  Order by uploads desc
  Limit 10
        */

/*        Select name, uploads
From (
    Select c.name, SUM(downloads) as uploads
    From uploads as u
    INNER join category_upload as uc on uc.upload_id=u.id
    INNER join categories as c on c.id=uc.category_id
    Group by  c.name    )as t
  Order by uploads desc
  Limit 10*/




        $users = DB::select('Select category_id, uploads
From (
    Select category_id, SUM(downloads) as uploads
    From uploads as u
    Left join category_upload as uc on uc.id=u.id
    Left join categories as c on c.id=uc.category_id
    Group by  category_id    )as t
  Order by uploads desc
  Limit 10');
        dd($users);

        return view('home');
    }
}
