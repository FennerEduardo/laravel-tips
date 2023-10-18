<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('id', 'title', 'status')->paginate();
        return view('posts.index', compact('posts'));
    }

    public function show(Request $request, Post $post)
    {
        return view('posts.show', compact('post'));
    }
}
