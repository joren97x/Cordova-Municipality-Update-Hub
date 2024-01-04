<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use App\Models\Barangay;
use App\Models\Official;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Question;
use GuzzleHttp\Psr7\Request;

class ViewController extends Controller
{
    //
    public function barangays() {
        return Inertia::render('User/Barangays', ['barangays' => Barangay::where('id', '!=', 14)->get()]);
    }

    public function events($barangay) {
        $brgy =  Barangay::where('name', $barangay)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'events')->get();
        return Inertia::render('User/Announcements/Events', ['posts' => $posts, 'barangay' => $barangay]);
    }

    public function sports($barangay) {
        $brgy =  Barangay::where('name', $barangay)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'sports')->get();
        return Inertia::render('User/Announcements/Sports', ['posts' => $posts, 'barangay' => $barangay]);
    }

    public function local_news($barangay) {
        $brgy =  Barangay::where('name', $barangay)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'local news')->get();
        return Inertia::render('User/Announcements/LocalNews', ['posts' => $posts, 'barangay' => $barangay]);
    }

    public function health_and_wellness($barangay) {
        $brgy =  Barangay::where('name', $barangay)->first();
        $posts = Post::where('barangay_id', $brgy->id)->where('category', 'health and wellness')->get();
        return Inertia::render('User/Announcements/HealthAndWellness', ['posts' => $posts, 'barangay' => $barangay]);
    }

    public function barangay_explore($brgy) {
        $barangay = Barangay::where('name', $brgy)->first();
        $SKofficials = Official::where('barangay_id', $barangay->id)->where('position_name', 'SK')->get();
        $Barangayofficials = Official::where('barangay_id', $barangay->id)->where('position_name', 'BO')->get();
        return Inertia::render('User/BarangayExplore', ['barangay' => $barangay, 'SKofficials' => $SKofficials, 'BOofficials' => $Barangayofficials]);
    }

    public function municipal() {
        return Inertia::render('User/Municipal');
    }

    public function visitors() {
        return Inertia::render('User/Visitors');
    }

    public function index() {

        $lposts = Post::where('category', 'local news')->where('barangay_id', 14)->get();
        $eposts = Post::where('category', 'events')->where('barangay_id', 14)->get();
        $sposts = Post::where('category', 'sports')->where('barangay_id', 14)->get();
        $hposts = Post::where('category', 'health and wellness')->where('barangay_id', 14)->get();

        return Inertia::render('User/Index', ['lposts' => $lposts, 'eposts' => $eposts, 'sposts' => $sposts, 'hposts' => $hposts]);
    }

    public function contact_us() {
        return Inertia::render('User/ContactUs');
    }

    public function support() {
        return Inertia::render('User/Support', ['questions' => Question::where('status', 'featured')->get()]);
    }

  
}
