<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function createUser(RegisterRequest $request){
        $user = ([
            'email' => $request->email,
            'username' => $request->username,
            'password' => $request->password,
        ]);
        $user['password'] = bcrypt($user['password']);
        $user = User::create($user);

        $request->session()->flash('success', 'Berhasil mendaftar, silahkan Login!!');
        
        return redirect(route('login'));
    }
}  
