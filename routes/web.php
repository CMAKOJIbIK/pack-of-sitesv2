<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    $http = \Illuminate\Support\Facades\Http::get('https://api.tlgr.org/bot' . config('bots.bot') . '/setWebhook?url=https://pack-of-sites.online/webhook');
//    dd('https://api.tlgr.org/bot' . config('bots.bot') . '/setWebhook?url=https://pack-of-sites.online/webhook');
    dd($name);
    return view('index');
});
Route::get('/bot', [WebhookController::class, "test"])->name("bot");
Route::post('/webhook' ,[WebhookController::class, "index"])->name("webhook");
