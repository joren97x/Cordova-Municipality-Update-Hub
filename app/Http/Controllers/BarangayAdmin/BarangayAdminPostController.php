<?php

namespace App\Http\Controllers\BarangayAdmin;

use App\Models\Post;
use Inertia\Inertia;
use App\Http\Controllers\Controller;

class BarangayAdminPostController extends Controller
{
    //
    public function index() {
        return Inertia::render('BarangayAdmin/Posts', ['posts' => Post::where('status', 'approved')->where('barangay_id', auth()->user()->area_id)->latest()->get()]);
    }

    public function pending() {
        return Inertia::render('BarangayAdmin/PendingPosts', ['posts' => Post::where('status', 'pending')->latest()->get()]);
    }

}
