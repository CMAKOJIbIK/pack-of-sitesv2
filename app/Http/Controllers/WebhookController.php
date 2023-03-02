<?php

namespace App\Http\Controllers;

use App\Helpers\Telegram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class WebhookController extends Controller
{
    private Telegram $telegram;

    public function __construct(Telegram $telegram){
        ini_set('max_execution_time', 86400);
        $this->telegram=$telegram;
    }
    public function index(Request $request): \Illuminate\Http\JsonResponse
    {
        Log::debug($request->all());

        $callback_data = $request->input('callback_query')['data'] ?? null;
        if ($callback_data) {
            $this->callback_function($callback_data, $request);
        } else {

            $this->message_function($request);
        }
        return response()->json(true, 200);
    }
    private function callback_function($callback_data, $request)
    {
        $data_request = explode('|', $callback_data);
        $callback_id = $request->input('callback_query')['message']['message_id'];
        $chat_id = $request->input('callback_query')['message']['chat']['id'];
        $this->telegram->edit_buttons($chat_id, "bebebebebebebe", "aaaa", "2269");
//        $this->telegram->send_message(5057038547, json_encode($data_request));

        if($data_request[1] == "true") {
            $this->telegram->send_buttons(5057038547, "Задание ", $data_request[0]+1);

        }else{
            $this->telegram->send_message(5057038547, "Вы проиграли");
        }
    }

    private function message_function($request)
    {
        $message = $request->input('message');
        $text = $message["text"] ?? null;
        $id = $message["from"]["id"] ?? null;
        $this->telegram->send_message(5057038547, json_encode($text));
        $this->telegram->send_message(5057038547, json_encode($id));
        if($text == "message"){
            $this->telegram->send_message(5057038547, "hi");
        }
        $this->telegram->send_buttons(5057038547, "", 0);


    }

    public function test(){
        $test_bot = "sendMessage?chat_id=5057038547&text=poluchilosb";
        $this->telegram->send_message(5057038547, "test");
    }
}
//sdds
