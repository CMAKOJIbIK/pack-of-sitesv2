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
        $callback_data = $request->input("callback_query") ?? null;
        Log::debug($callback_data);
        $this->telegram->send_message(5057038547, json_encode($callback_data));
        return response()->json(true, 200);
    }

    public function test(){
        $test_bot = "sendMessage?chat_id=5057038547&text=poluchilosb";
        $this->telegram->send_message(5057038547, "test");
    }
}
