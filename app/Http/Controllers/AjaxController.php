<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    public function add_message(Request $request){

        $name = $request->input('name');
        $surname = $request->input('surname');
        $mail = $request->input('mail');
        $text = $request->input('message');

        $message = new Message();
        $message->name = $name;
        $message->surname = $surname;
        $message->gmail = $mail;
        $message->message = $text;
        $message->save();
        return back();
    }
}
