<?php

namespace App\Http\Controllers;

use App\Msg;
use Illuminate\Http\Request;


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
    //
}
