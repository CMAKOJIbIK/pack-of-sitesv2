<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebhookController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\AdminController;
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
Route::get('/cursor_anim' ,[PageController::class, "cursor_anim"])->name("cursor_anim");
Route::get('/contact' ,[PageController::class, "contact"])->name("contact");
Route::get('/work' ,[PageController::class, "work"])->name("work");
Route::post('/message' ,[PageController::class, "message"])->name("message");
Route::post('/add_message' ,[AjaxController::class, "add_message"])->name("add_message");
Route::get('/settings' ,[PageController::class, "settings"])->name("settings");
Route::get('/admin' ,[AdminController::class, "admin"])->name("admin");
Route::post('/password_admin' ,[AdminController::class, "password_admin"])->name("password_admin");
Route::get('/theme_1' ,[PageController::class, "theme_1"])->name("theme_1");
Route::get('/theme_2' ,[PageController::class, "theme_2"])->name("theme_2");
Route::get('/theme_3' ,[PageController::class, "theme_3"])->name("theme_3");
