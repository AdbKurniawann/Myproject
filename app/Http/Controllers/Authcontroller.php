<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Authcontroller extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::Attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }
            return redirect('/login');
    }
}
