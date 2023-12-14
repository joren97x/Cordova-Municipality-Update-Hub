<?php

namespace App\Http\Controllers\BarangayAdmin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AnnouncementController extends Controller
{
    //
    public function local_news() {
        return Inertia::render('BarangayAdmin/Announcements/LocalNews', ['announcements' => Post::get()]);
    }

    public function events() {
        return Inertia::render('BarangayAdmin/Announcements/Events', ['announcements' => Post::get()]);
    }

    public function sports() {
        return Inertia::render('BarangayAdmin/Announcements/Sports', ['announcements' => Post::get()]);
    }

    public function health_and_wellness() {
        return Inertia::render('BarangayAdmin/Announcements/HealthAndWellness', ['announcements' => Post::get()]);
    }
}
