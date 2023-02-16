<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use App\Helpers\Telegram;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Facades\Route;
class Handler extends ExceptionHandler
{
    protected $telegram;

    public function __construct(Container $container, Telegram $telegram)
    {
        parent::__construct($container);
        $this->telegram = $telegram;
    }
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function report(Throwable $e)
    {
        $route_name = Route::getFacadeRoot()->current()->uri();
        if ($e->getMessage() === "Unauthenticated.") {
            if($_SERVER['REMOTE_ADDR'] === "127.0.0.1"){
                return parent::report($e);
            }else{
                $data = ['description' => "Ктото неавторизованный",
                    'file' => $_SERVER['REMOTE_ADDR'],
                    'line' => $e->getLine(),
                    'route_name' => $route_name,
                ];
            }

        } else {
            $data = ['description' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'route_name' => $route_name,
            ];
        }
        $this->telegram->send_message(env('REPORT_TELEGRAM_ID', "5057038547"), view('bot_messages.report', $data));
        return parent::report($e);
    }
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
