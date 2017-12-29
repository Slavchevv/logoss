<?php

namespace App\Http\Controllers;

use App\Avtor;
use App\Category;
use App\PAdmin;
use App\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
    {

        $user_id = Auth::id();//needed later
        //dd($user_id);

       // $isAdmin = PAdmin::where('user_id',$user_id)->get();
        //dd($isAdmin);

        $categories = DB::select(' Select id, name, uploads
            From (
            Select c.id, c.name, SUM(downloads) as uploads
            From uploads as u
            INNER join category_upload as uc on uc.upload_id=u.id
            INNER join categories as c on c.id=uc.category_id
            Group by  c.id, c.name    )as t
            Order by uploads desc
             Limit 10');
               // dd($categories);

        $uploads = Upload::take(10)->orderBy('downloads', 'DESC')->get();
        //dd($uploads);
        //$avtors = DB::select('Select name, uploads FROM(select av.name, SUM(downloads) as uploads FROM uploads as u INNER JOIN avtors AS av on av.id=u.avtor_id GROUP BY av.name) as t ORDER by uploads desc');
        $avtors = DB::select('Select id, name, uploads FROM(select av.id, av.name, SUM(downloads) as uploads FROM uploads as u INNER JOIN avtors AS av on av.id=u.avtor_id GROUP BY av.id, av.name) as t ORDER by uploads desc');//
        //dd($uploads);
        //return view('home')->with('categories', $categories);

       /* if(PAdmin::where('user_id',Auth::id())->first() != null) return redirect('/admin');*/
        return view('home',compact('categories','uploads','avtors'));
        //return view('controller.view', compact('users','projects','foods'));
    }

    public function search(Request $request){

        $search = $request->input('search');
        $upload = Upload::where('name', 'like', '%' . $search . '%')->get();
        $avtor = Avtor::where('name', 'like', '%' . $search . '%')->get();
        //dd($upload);
        //return view('search-results')->with('upload',$upload);

        return view('search-results',compact('upload','avtor'));
    }



}
