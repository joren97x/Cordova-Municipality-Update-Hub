<?php

namespace App\Http\Controllers\BarangayAdmin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class BarangayAdminPostController extends Controller
{
    //
    public function index() {
        return Inertia::render('BarangayAdmin/Posts');
    }

    public function pending() {
        return Inertia::render('BarangayAdmin/PendingPosts');
    }

}
