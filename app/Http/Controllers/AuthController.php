<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $validatedUser = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($validatedUser)){
            $user = User::where('email', $validatedUser['email'])->first();
            Auth::login($user);
            if($user->role == 'barangay_admin') {
                return redirect('/barangay-admin/dashboard');
            }
            else {
                return redirect('/municipal-admin/dashboard');
            }

        }
    }
}
