<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        if(Auth::attempt([
            'email' => $request->email,
            'password'=> $request->password,
        ])){
            return redirect('admin');
        }else{
            return redirect()->to(path: 'login')->with('message', 'Email atau Password salah');
        }
    }
};