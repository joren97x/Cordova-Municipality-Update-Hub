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

    public function sign_up(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user['role'] = 'municipal_admin';
        User::create($user);
        return redirect('/sign-in');
    }

    public function signUp() {
        return Inertia::render('Auth/SignUp');
    }

    public function logout() {
        Auth::logout();
        return redirect('/sign-in');
    }

    public function signin(Request $request) {
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        if(Auth::attempt($user)){
            $userr = User::where('email', $user['email'])->first();
            Auth::login($userr);
            if($userr['role'] == 'barangay_admin') {
            return redirect('/BarangayAdminLayout');
            }
            return redirect('/MunicipalAdminLayout');
        }
    }
}
