<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\PageController;
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


Route::get('/bot', [WebhookController::class, "test"])->name("bot");
Route::post('/webhook' ,[WebhookController::class, "index"])->name("webhook");
Route::get('/' ,[PageController::class, "index"])->name("index");
Route::get('/skills' ,[PageController::class, "skills"])->name("skills");
Route::get('/about' ,[PageController::class, "about"])->name("about");
