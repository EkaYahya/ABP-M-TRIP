<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function postlogin (Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/index');
        }
        return redirect('login');
    }
} 
