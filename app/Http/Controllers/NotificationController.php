<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function sendSSE(){
        $notified = Notification::where('sended',0)->first();

        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');

        if($notified){
            $data = ['message'=>$notified->message];
            

            echo 'data:' . json_encode($data)."\n\n";
            $notified->sended = 1;
            $notified->update();

        }else{
            echo "\n\n";
        }

        ob_flush();
        flush();
    }
}
