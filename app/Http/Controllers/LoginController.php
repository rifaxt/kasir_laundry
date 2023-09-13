<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function postlogin (Request $request) {
        //dd($request->all());
        if (Auth::attempt($request->only('email','password'))){
            return redirect('/jenis');

        }
        return redirect ('login');

    }

    public function logout (Request $request) {
        Auth::logout();
        return redirect('/login');
    }
}
