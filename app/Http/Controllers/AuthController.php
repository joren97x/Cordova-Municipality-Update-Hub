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

        // Validates the incoming data (email and password)
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        // Tries to authenticate (login) using the provided credentials
        if(Auth::attempt($credentials)){
            // If authentication is successful:
            // Regenerates a new session ID for security purposes
            $request->session()->regenerate();

            // Checks the role of the authenticated user
            if(auth()->user()->role == 'barangay_admin') {
                // Redirects to the dashboard for barangay_admin (a specific type of user)
                return redirect('/barangay-admin/dashboard');
            }
            else {
                // Redirects to the dashboard for municipal_admin (another type of user)
                return redirect('/municipal-admin/dashboard');
            }
        }

        // If authentication fails:
        // Redirects the user back to the previous page (login page) with an error message
        return back()->withErrors(['email' => 'The provided credentials do not match our records.',])->onlyInput('email');
    }
}
