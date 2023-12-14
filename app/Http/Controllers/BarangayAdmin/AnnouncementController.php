<?php

namespace App\Http\Controllers\BarangayAdmin;

use App\Models\Post;
use Inertia\Inertia;
use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    //
    public function events() {
        $brgy =  Barangay::where('id', auth()->user()->area_id)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'events')->where('status', 'approved')->get();
        return Inertia::render('BarangayAdmin/Announcements/Events', ['posts' => $posts]);
    }

    public function sports() {
        $brgy =  Barangay::where('id', auth()->user()->area_id)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'sports')->where('status', 'approved')->get();
        return Inertia::render('BarangayAdmin/Announcements/Sports', ['posts' => $posts]);
    }

    public function local_news() {
        $brgy =  Barangay::where('id', auth()->user()->area_id)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'local news')->where('status', 'approved')->get();
        return Inertia::render('BarangayAdmin/Announcements/LocalNews', ['posts' => $posts]);
    }

    public function health_and_wellness() {
        $brgy =  Barangay::where('id', auth()->user()->area_id)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'health and wellness')->where('status', 'approved')->get();
        return Inertia::render('BarangayAdmin/Announcements/HealthAndWellness', ['posts' => $posts]);
    }

}
