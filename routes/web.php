<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::post('send-message', [\App\Http\Controllers\TelegramController::class, 'sendMessage'])->name('send-message');
Route::post('subscribe', [\App\Http\Controllers\TelegramController::class, 'subscribe'])->name('subscribe');
