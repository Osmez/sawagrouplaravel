<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Sawaorder;


Route::post('/user/admin',function(){
    $id = request()->get('userid');
    $user = User::find($id);
    $user->admin = true;
    $user->save();
    return back();
})->middleware(['auth','verified'])->name('setadmin');
Route::post('/user/removeadmin',function(){
    $id = request()->get('userid');
    $user = User::find($id);
    $user->admin = false;
    $user->save();
    return back();
})->middleware(['auth','verified'])->name('removeadmin');

/*
|--------------------------------------------------------------------------
| ADMIN CONTROL ROUTESs
|--------------------------------------------------------------------------
|
*/

Route::get('/deleteuser/{id}',function($id){
    if($id == 2){
        return back()->with('error','This user cant be deleted');
    }
    $user = User::find($id);
    $user->delete();
    return redirect(route('dashoard'))->with('success','User has been deleted');
})->middleware(['auth','verified'])->name('deleteuser');

Route::get('/profile/{id}',function($id){
    $user = User::find($id);
    $orders = Sawaorder::where('user_id',$user->id)->paginate(12);
    return view('profile.show',['user'=>$user,'orders'=>$orders]);
})->whereNumber('id')->middleware(['auth','verified'])->name('showuser');
