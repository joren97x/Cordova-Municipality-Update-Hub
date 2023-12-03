<?php

namespace App\Http\Controllers\BarangayAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

class BarangayAdminHomeController extends Controller
{
    //
    public function dashboard() {
        return Inertia::render('BarangayAdmin/Dashboard');
    }
}
