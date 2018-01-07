<?php

namespace App\Http\Controllers;

use App\Msg;
use App\Points;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessagesController extends Controller
{

    public function submit(Request $request){

        $this->validate($request,['name'=>'required', 'email'=>'required']);


        //return $request->input('name');
        $message = new Msg;
        $message->name = $request->input('name');
        $message->email = $request->input('email');
        $message->msg = $request->input('msg');

        $message->save();

        //Redirect
        return redirect('/');
    }

    public function update_points(){
        $user_id = Auth::id();
        $points = Points::where('user_id',$user_id)->get();
       // dd($points[0]['attributes']['points']);
        return $points[0]['attributes']['points'];
    }
    //
}
