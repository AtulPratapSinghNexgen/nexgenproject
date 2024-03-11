<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function AddPost(){

        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'post_title' => 'required|string',
            'post_content' => 'required|string',
        ]);

        $post = new Posts();
        $post->post_title = $request->post_title;
        $post->post_content = $request->post_content;
        $post->user_id = auth()->id();
        $post->save();

        return redirect()->route('index')->with('success', 'Post created successfully.');
    }

    
}
