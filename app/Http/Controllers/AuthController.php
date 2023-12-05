<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AuthController extends Controller
{
    //

    public function sign_in() {
        return Inertia::render('Auth/Signin');
    }

    public function forgot_password() {
        return Inertia::render('Auth/ForgotPassword');
    }

    public function logout() {
        Auth::logout();
        return redirect('/sign-in');
    }

    public function signin(Request $request) {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            if(auth()->user()->role == 'barangay_admin') {
                return redirect('/barangay-admin/dashboard');
            }
            else {
                return redirect('/municipal-admin/dashboard');
            }
        }

        return back()->withErrors(['email' => 'The provided credentials do not match our records.',])->onlyInput('email');
    }
}
