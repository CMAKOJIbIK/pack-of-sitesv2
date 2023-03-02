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
    public function edit_message($chat_id, $message, $message_id)
    {

        return $this->http::post(self::url . $this->bot . '/editMessageText', [
            'chat_id' => $chat_id,
            'text' => $message,
            'parse_mode' => 'html',
            'message_id' => $message_id,
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
                "id" => 1,
                "name" => "Куда можно идти",
                "data" => ["лево", "право", "вверх", "вниз"],
            ],
            [
                "id" => 2,
                "name" => "Куда можно ехать",
                "data" => ["прямо", "туда", "сюда", "поперек"],
            ],
            [
                "id" => 3,
                "name" => "Куда можно плыть",
                "data" => ["на дно", "на берег", "на лодку", "в кита"],
            ],
            [
                "id" => 4,
                "name" => "От куда можно бежать",
                "data" => ["От маньяка", "от собаки", "от соседа", "от брата"],
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
                'text' => (string)view('bot_messages.bot_button', $test_a[$test_id]),
                'parse_mode' => 'html',

                'reply_markup' => $button,
            ]);
        } else {
            $this->send_message(5057038547, "Тест завершен");
        }
        return false;
    }
}
