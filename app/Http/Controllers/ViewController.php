<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ViewController extends Controller
{
    //
    public function barangays() {
        return Inertia::render('User/Barangays');
    }
    
    public function municipal() {
        return Inertia::render('User/Municipal');
    }

    public function visitors() {
        return Inertia::render('User/Visitors');
    }

    public function index() {
        return Inertia::render('User/Index');
    }

    public function contact_us() {
        return Inertia::render('User/ContactUs');
    }

    public function support() {
        return Inertia::render('User/Support');
    }
    
}
