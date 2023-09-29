<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AuthController extends Controller
{
    //

    public function sign_in() {
        return Inertia::render('Auth/Signin');
    }

}
