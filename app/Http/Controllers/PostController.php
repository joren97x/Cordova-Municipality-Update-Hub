<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function store(Request $request) {
        $post = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'category' => 'required',
            'area_type' => 'required',
            'banner' => 'required'
        ]);
        $post['banner'] = $post['banner'][0]->getClientOriginalName();
        $request->banner[0]->move(public_path('/images/banner'), $post['banner']);
        $post['barangay_id'] = auth()->user()->area_id;
        if(auth()->user()->role == "municipal_admin") {
            $post['status'] = "approved";
        }
        else {
            $post['status'] = "pending";
        }
        Post::create($post);
        return back();
    }
}
