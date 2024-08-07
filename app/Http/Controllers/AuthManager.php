<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function LoginPost(Request $request){
        $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        $ue = $request->input('login');
        $field = filter_var($ue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        $login_data = [
            $field => $ue,
            'password' => $request->input('password')
        ];
        if(Auth::attempt($login_data)){
            $user = Auth::user();
            switch($user->role_id){
                case 1000:
                    return redirect()->intended(route('Admin_Dashboard'));
                case 100:
                    return redirect()->intended(route('User_Dashboard'));
                case 10:
                    return redirect()->intended(route('User_Dashboard'));
                default:
                    return abort(403, 'Unauthorized Access.');
            }
        }else{
            return redirect()->back()->with('error', 'Invalid login details');
        }
    }
}
