<?php

namespace App\Http\Controllers;

use App\Http\Requests\sendMessageRequest;
use App\Http\Requests\subscribeRequest;
use Telegram\Bot\Laravel\Facades\Telegram;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\email;

class TelegramController extends Controller
{
    public function sendMessage(sendMessageRequest $request)
    {
        $text = "Tin nhắn mới\n"
            . "<b>Tên: </b>\n"
            . "$request->email\n"
            . "<b>Email Address: </b>\n"
            . "$request->email\n"
            . "<b>Tiêu Đề: </b>\n"
            . "$request->subject\n"
            . "<b>Nội dung: </b>\n"
            . $request->message;

        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID', ''),
            'parse_mode' => 'HTML',
            'text' => $text
        ]);

        email::create([
            'email'     => $request->email,
            'type'      => 'send-message',
        ]);

        Toastr::success('Your message has been sent!','Success');

        return redirect()->back();
    }

    public function subscribe(subscribeRequest $request)
    {
        email::create([
            'email'     => $request->email,
            'type'      => 'subscribe',
        ]);

        Toastr::success('You have successfully subscribed!','Success');
        return redirect()->back();
    }
}
