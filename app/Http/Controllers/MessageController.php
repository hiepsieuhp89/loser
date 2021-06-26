<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;
use App\Models\Message;
use Pusher\Pusher;

class MessageController extends Controller
{
    private static $pusher;
    public function __construct(){
        static::$pusher = new Pusher(
            '6358cad807c2e259fec7',
            '892f81a0db2133462121',
            '1075808',
            array(
                'cluster' => 'ap1',
                'useTLS' => true
            )
        );
    }
    public function sendMessage(Request $request){
        $data = $request->all();

        $from = $data['user_id'];

        $m = $data['message'];

        $message = new Message();
        $message->from = $from;
        $message->message = $m;
        $message->save();

        $statistic = Statistic::first();
        Statistic::first()->update(['messages_sent_count' => $statistic->messages_sent_count + 1]);

        $created_at = date('d M y, h:i a', strtotime($message->created_at));

        $data = [
            'id' => $data['id'],
            'from' => $from,
            'time' => $created_at,
            'message' => $m
        ];

        static::$pusher->trigger('message-channel', 'send-message', $data);
        return response(true);
    }
}
