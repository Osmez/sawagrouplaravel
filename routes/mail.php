<?php

use Illuminate\Support\Facades\Route;
use App\Mail\contact;
use Illuminate\Support\Facades\Mail;


Route::post('/sendemail',function(){

request()->validate([
    'email'=>'required | email',
    'message'=>'required | max:1000',
    'phone'=>'required ',
]);

$infos = new stdClass();
$infos->email = request()->get('email');
$infos->phone = request()->get('phone');
$infos->message = request()->get('message');

Mail::to("sawagroup@gmail.com")->send(new contact($infos));
return back()->with('success','E-mail haas been sent');

})->name('sendemail');

Route::post('/sendemailar',function(){

request()->validate([
    'email'=>'required | email',
    'message'=>'required | max:1000',
    'phone'=>'required ',
]);

$infos = new stdClass();
$infos->email = request()->get('email');
$infos->phone = request()->get('phone');
$infos->message = request()->get('message');

Mail::to("sawagroup@gmail.com")->send(new contact($infos));
return back()->with('success','E-mail haas been sent');

})->name('sendemailar');
Route::post('/sendemailjp',function(){

request()->validate([
    'email'=>'required | email',
    'message'=>'required | max:1000',
    'phone'=>'required ',
]);

$infos = new stdClass();
$infos->email = request()->get('email');
$infos->phone = request()->get('phone');
$infos->message = request()->get('message');

Mail::to("sawagroup@gmail.com")->send(new contact($infos));
return back()->with('success','E-mail haas been sent');

})->name('sendemailjp');