<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Sawaorder;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }
    
    /**
     * Display the user's profile to admin.
     */
    public function show($id): View
    {
        $user = User::find($id);
        $orders = Sawaorder::where('user_id',$user->id)->get();
        return view('profile.show', [
            'user' => $user,
            'orders' => $orders,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function UpdateAvatar(){
        request()->validate([
            'avatar' => 'required | image | max:500 | mimes:jpg,jpeg,png,bmp,gif'
        ]);
        $user = request()->user();
        $exe = request()->file('avatar')->extension();
        $userid = request()->user()->id;
        $filename = time().'-'.$userid.'.'.$exe;
        $avatar_path = request()->file('avatar')->storeAs('profile',$filename,'public'); 
        
        if($user->avatar != null && $user->avatar != ''){
            $link = 'storage/'.$user->avatar;
            unlink($link);
           
        }
        $user->avatar = $avatar_path;
        $user->save();
        
        
        return redirect()->route('profile.edit')->with('avatar','Profile image updated successfully');
    }
}
