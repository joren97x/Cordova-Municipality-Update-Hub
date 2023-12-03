<?php

namespace App\Http\Controllers\MunicipalAdmin;

use App\Models\Post;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Barangay;

class MunicipalAdminPostController extends Controller
{
    //
    public function index() {
        return Inertia::render('MunicipalAdmin/ManagePosts', ['posts' => Post::all()]);
    }

    public function pending() {
        return Inertia::render('MunicipalAdmin/PendingPosts', 
        [
            'posts' => Post::where('status', 'pending')->get(),
            'barangays' => Barangay::all()
        ]);
    }

}
