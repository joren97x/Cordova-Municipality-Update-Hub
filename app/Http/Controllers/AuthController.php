<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AuthController extends Controller
{
    //

    public function sign_in() {
        return Inertia::render('Auth/Signin');
    }

    public function sign_up(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $userr = Auth::create($user);
        return redirect('/sign-in');
    }

    public function signUp() {
        return Inertia::render('Auth/SignUp');
    }

    public function signin(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        dd($user);
        if(Auth::attempt($user)){
            dd('kekek');
        }
        else {
            dd('sdasdsd');
        }
    }
}
