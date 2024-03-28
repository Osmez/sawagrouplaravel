<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Notification;
use App\Models\Sawaorder;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view('/contact','contactasc');

Route::get('/dashboard/{search?}', function (?string $search=null) {
    $nots = Notification::where('user_id',request()->user()->id)->where('viewed',false);

    $u = User::find(request()->user()->id);
    
    $u->save();
    if($search == 'orders'){
        $orders = Sawaorder::orderby('created_at','DESC')->paginate(10);
        return view('dash.orders',['orders'=>$orders]);
    }elseif($search == 'users'){
        $users = User::orderby('name','ASC')->paginate(10);
        return view('dash.users',['users'=>$users]);
    }elseif($search == 'addedorder'){
        return view('dash.services')->with('success',__('website.orderadded'));
    }elseif($search == 'byusers'){
            $orders = Sawaorder::orderby('user_id','DESC')->paginate(10);
            return view('dash.byuser',['orders'=>$orders]);
    }elseif($search == 'byservices'){
        $orders = Sawaorder::orderby('service_id','DESC')->paginate(10);
        return view('dash.byservice',['orders'=>$orders]);
    }elseif($search == 'myorders'){
        $user = request()->user();
        $count = $user->sawaorders->count();
        return view('dash.myorders',['user'=>$user,'count'=>$count]);
    }
    
    $services = Service::orderby('created_at','DESC')->paginate(10);
    
    return view('dash.services',['services'=>$services,'nots'=>$nots,'id'=>Auth::user()->id]);
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/profile/updateavatar', [ProfileController::class, 'UpdateAvatar'])->name('profile.updateavatar');


/*
|--------------------------------------------------------------------------
| 404 ROUTES
|--------------------------------------------------------------------------
|
*/

Route::fallback(function(){
    return view('nourl');
});





require __DIR__.'/auth.php';
