<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;

class Telegram
{
    protected Http $http;
    protected $bot;
    const url = 'https://api.telegram.org/bot';
    private int $is_connect;

    public function __construct(Http $http)
    {
        $this->http = $http;
        $this->bot = config('bots.bot');
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
        $data = ['description' => "emae",
            'file' => "netu peremennih",
            'line' => 1,
            'route_name' => "aaaaaaaaaaaa",
        ];


        $test_a = [
            [
                "name" => "Куда можно идти",
                "data" => ["лево", "право", "вверх", "вниз"],
            ],
            [
                "name" => "Куда можно ехать",
                "data" => ["прямо", "туда", "сюда", "поперек"],
            ],
        ];

        if (count($test_a) > $test_id) {

            $button = [];
            $button['inline_keyboard'][][0] = [
                'text' => "A) " . $test_a[$test_id]["data"][0],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "B) " . $test_a[$test_id]["data"][1],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "C) " . $test_a[$test_id]["data"][2],
                'callback_data' => "$test_id|false"
            ];
            $button['inline_keyboard'][][0] = [
                'text' => "D) " . $test_a[$test_id]["data"][3],
                'callback_data' => "$test_id|true"
            ];

            return $this->http::post(self::url . $this->bot . '/sendMessage', [
                'chat_id' => $chat_id,
                'text' => view('bot_messages.bot_button', $test_a[0]),
                'parse_mode' => 'html',

                'reply_markup' => $button,
            ]);
        } else {
            $this->send_message(5057038547, "Тест завершен");
        }
        return false;
    }
}
