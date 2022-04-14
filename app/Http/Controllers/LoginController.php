<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();//menghindari hacking
            return redirect()->intended('/');//melewati middleware
        }
        //dd('gagal login');
        return back()->with([
            'gagal' => 'Login gagal!',
        ]);
        
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
