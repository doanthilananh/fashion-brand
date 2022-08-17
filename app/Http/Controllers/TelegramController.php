<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Telegram\Bot\Laravel\Facades\Telegram;
use Carbon\Carbon;

class TelegramController extends Controller
{
    public function updateActivity()
    {
        $text = "A new order\n"
            . "<b>Email Address: </b>\n"
            . "nhom12@gmail.com\n"
            . "<b>Message: </b>\n"
            . "Incoming new message at ".Carbon::now('Asia/Ho_Chi_Minh');
 
        Telegram::sendMessage([
            'chat_id' => env('TELEGRAM_CHANNEL_ID'),
            'parse_mode' => 'HTML',
            'text' => $text,
        ]);
        return 0;
    }
}
