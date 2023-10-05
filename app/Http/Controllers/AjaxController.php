<?php

namespace App\Http\Controllers;

use App\Helpers\Telegram;
use App\Models\Message;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    private Telegram $telegram;
    public function __construct(Telegram $telegram)
    {
        $this->telegram = $telegram;
    }
    public function add_message(Request $request){

        $name = $request->input('name');
        $surname = $request->input('surname');
        $mail = $request->input('mail');
        $text = $request->input('message');
        $page_name = $request->input('page_name');

        $message = new Message();
        $message->name = $name;
        $message->surname = $surname;
        $message->gmail = $mail;
        $message->message = $text;
        $message->page_name = $page_name;
        $message->save();
        $data = [
            'name' => $name,
            'surname' => $surname,
            'mail' => $mail,
            'message' => $text,
            'page_message' => $page_name,
        ];
        $this->telegram->send_message_all_user(view('bot_messages.user_message', $data));
        return back();
    }

}
