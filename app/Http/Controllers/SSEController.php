<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;

class SSEController extends Controller
{
    public function Send(){
        $notifications = Notification::where('user_id',Auth()->user()->id)->where('viewed',0)->count();
        $notfication = Notification::where('user_id',Auth()->user()->id)->where('sended',0)->first();

        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Connection: keep-alive");
       
        if($notfication){
            $eventData =  strval($notifications);
            $notfication->sended=true;
            $notfication->save();
            echo "data:".json_encode($eventData)."\n\n";
            
        }else{
            echo "\n\n";
        }

        ob_flush();
        flush();
    }

    public function SendAd(){
        if(Auth::user()->admin == true){
            $notifications = Notification::where('user_id',2)->where('viewed',false)->count();
            $notfication = Notification::where('user_id',2)->where('sended',false)->first();
        }else{
            $uid = Auth::user()->id;
            $notifications = Notification::where('user_id',$uid)->where('viewed',false)->count();
            $notfication = Notification::where('user_id',$uid)->where('sended',false)->first();
        }
        
        header("Content-Type: text/event-stream");
        header("Cache-Control: no-cache");
        header("Connection: keep-alive");
       
        if($notfication){
            $eventData =  strval($notifications);
            $notfication->sended=true;
            $notfication->save();
            $not = Notification::all();

           
            echo "data:".json_encode($eventData)."\n\n";
            
        }else{
            echo "\n\n";
        }

        ob_flush();
        flush();
    }
}
