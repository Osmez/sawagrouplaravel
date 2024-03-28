<?php

use App\Http\Controllers\CompleteorderController;
use App\Http\Controllers\SawaorderController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| SAWA ORDERS ROUTES
|--------------------------------------------------------------------------
|
*/

Route::controller(SawaorderController::class)->prefix('/sawaorders')->name('sawaorder.')->middleware(['auth','verified'])->group(function () {
    Route::get('/orders','getOrders')->name('vieworders');
    Route::get('/order/{sawaorder}','showorder')->whereNumber('id')->name('showorder');
    Route::get('/order/{id}/complete','CompleteForm')->whereNumber('id')->name('completeorder');
    Route::get('/addorder/{service:title_en}','AddForm')->name('new');
    Route::get('/payment',function(){return view('sawaorders.payment');})->name('payment');
    Route::post('/downloadfile','FileDownload')->name('downloadfile');
    Route::post('/insert','AddOrder')->name('addneworder');
    Route::get('/update/{id}','UpdateOrder')->whereNumber('id')->name('updateorder');
    Route::post('/updatetheorder','DoUpdate')->name('updatetheorder');
    Route::delete('/delete/{id}','Destroy')->whereNumber('id')->name('deleteorder');

});

/*
|--------------------------------------------------------------------------
| SAWA ORDER COMPLETE
|--------------------------------------------------------------------------
|
*/
Route::controller(CompleteorderController::class)->prefix('/completedorders')->name('complete.')->middleware(['auth','verified'])->group(function () {
    Route::get('/all','ViewAllCompleted')->name('viewcompleted');
    Route::get('/form/{id}','CompleteForm')->whereNumber('id')->name('completeform');
    Route::get('/{id}','ViewCompleted')->whereNumber('id')->name('showcompleted');
    Route::post('/insert','Complete')->name('completetheorder');
    Route::patch('/update/{id}','UpdateComplete')->whereNumber('id')->name('updateorder');
    Route::delete('/delete/{id}','DeleteComplete')->whereNumber('id')->name('deleteorder');
    
});


/*
|--------------------------------------------------------------------------
| SAWA SERVICES ROUTES
|--------------------------------------------------------------------------
|
*/

Route::controller(ServiceController::class)->prefix('/sawaservices')->name('sawaservice.')->middleware(['auth','verified'])->group(function () {
    Route::view('/form','sawaservices.service-form')->name('serviceform');
    Route::get('/update/{id}','updateview')->name('serviceupdateform');
    Route::post('/add','AddService')->name('new');
    Route::post('/doupdate','ServiceUpdate')->whereNumber('id')->name('updateservice');
    Route::delete('/delete/{id}','Destroy')->whereNumber('id')->name('deleteservice');
    
});
