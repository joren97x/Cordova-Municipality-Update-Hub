<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class VisitorController extends Controller
{
    //
    public function essential_travel_facts() {
        return Inertia::render('User/Visitors');
    }

    public function must_see_sites() {
        return Inertia::render('User/Visitors');
    }

    public function entertainment() {
        return Inertia::render('User/Visitors');
    }

    public function bed_and_dine() {
        return Inertia::render('User/Visitors');
    }

    public function money_exchange() {
        return Inertia::render('User/Visitors');
    }

}
