<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;


Route::get('/lang/{lang}', function($lang){
    app()->setLocale($lang);
    session()->put('locale',$lang);

    return back();
});

Route::get('/getlang',function(){
    $langs = ["jp","en","ar"];
    $newlang = array();
    
    foreach($langs as $lang){
        if($lang != App::getLocale()){
            array_push($newlang,$lang);
        }
    }
    
    return response()->json($newlang);
    
})->name('langs');


