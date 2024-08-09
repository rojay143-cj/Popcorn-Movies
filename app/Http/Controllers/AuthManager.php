<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    function LoginPost(Request $request){
        $validate = validator($request->all(), [
            'login' => 'required|min:4',
            'password' => 'required|min:4'
        ]);
        if($validate->fails()){
            return redirect()->back()->with('error', 'Please fill in all fields');
        }
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
                case 10:
                    return redirect()->intended(route('User_Dashboard'));
                default:
                    return abort(403, 'Unauthorized Access.');
            }
        }else{
            return redirect()->back()->with('error', 'Incorrect Username or Password');
        }
    }
    public function Logout(){
        Session::flush();
        Auth::logout();
        return redirect()->intended(route('homepage'));
    }
}
