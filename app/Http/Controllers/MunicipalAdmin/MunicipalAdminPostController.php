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
        return Inertia::render('MunicipalAdmin/ManagePosts', ['posts' => Post::where('status', 'approved')->where('barangay_id', auth()->user()->area_id)->latest()->get()]);
    }

    public function pending() {

        $barangays = Barangay::all();

        foreach($barangays as $barangay) {
            $barangay->posts = Post::where('barangay_id', $barangay->id)->where('status', 'pending')->latest()->get();
            $barangay->pendingPostsCount = count($barangay->posts);
        }

        return Inertia::render('MunicipalAdmin/PendingPosts', 
        [
            'barangays' => $barangays
        ]);
    }

    public function approve(Request $request) {
        $post = Post::find($request->id);
        $post->status = "approved";
        $post->update();
        return back();
    }

    public function decline(Request $request) {
        $post = Post::find($request->id);
        $post->status = "declined";
        $post->update();
        return back();
    }


}
