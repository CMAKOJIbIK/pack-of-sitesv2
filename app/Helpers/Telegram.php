<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
class Telegram{
    protected Http $http;
    protected $bot;
    const url = 'https://api.telegram.org/bot';
    private int $is_connect;

    public function __construct(Http $http){
        $this->http=$http;
        $this->bot=config('bots.bot');
    }
    public function send_message($chat_id, $message)
    {
        return $this->http::post(self::url . $this->bot . '/sendMessage', [
            'chat_id' => $chat_id,
            'text' => (string)$message,
            'parse_mode' => 'html'
        ]);
    }
    public function send_buttons($chat_id, $message, $test_id)
    {
        $test_a = [
            ["прямо", "туда", "сюда", "петя"],
            ["вверх", "сюда", "не туда", "маша"],
        ];
        if(count($test_a) < $test_id){
            $button = [];
            $button['inline_keyboard'][][0] = [
                'text' => "A) " . $test_a[$test_id][0],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "B) " . $test_a[$test_id][1],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "C) " . $test_a[$test_id][2],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "D) " . $test_a[$test_id][3],
                'callback_data' => "$test_id|true"
            ];

            return $this->http::post(self::url . $this->bot . '/sendMessage', [
                'chat_id' => $chat_id,
                'text' => (string)$message . $test_id,
                'parse_mode' => 'html',

                'reply_markup' => $button,
            ]);
        }else {
            $this->send_message(5057038547, "Тест завершен");
        }
        return false;
    }
}
