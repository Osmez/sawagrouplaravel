<?php

use App\Http\Controllers\NotificationController;
use App\Http\Controllers\SSEController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;
/*
|--------------------------------------------------------------------------
| NOTIFICATION ROUTES
|--------------------------------------------------------------------------
|
*/

Route::get('/notify',[NotificationController::class,'index'])->name('sse');
Route::get('/notifyme',function(){
    if(Auth::user()->admin == true){
        $nots = Notification::where('user_id',2)->orderby('created_at','DESC')->take(10)->get();
    }else{
        $nots = Notification::where('user_id',Auth::user()->id)->orderby('created_at','DESC')->take(10)->get();
    }

    foreach($nots as $not){
        $not->viewed=true;
        $not->save();
    }
    return response()->json($nots);
})->name('notifyme');
Route::get('/notifynum',function(){
    
   $nots = Notification::where('viewed',0)->where('user_id',Auth::user()->id)->get()->count();
   
   return response()->json($nots);
})->name('notifynum');

Route::get('/notifyadmin',function(){
    $nots = Notification::where('viewed',0)->where('user_id',2)->get()->count();
    
    return response()->json($nots);
 })->name('notifyadmin');
Route::get('/sseupdate',[SSEController::class,'Send'])->name('sendsse');
Route::get('/sseupdatead',[SSEController::class,'SendAd'])->name('sendad');