<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::find([1, 2, 3]);

        $posts = Post::whereIn('id',[1,2,3,4])->get();

        return $posts;
    }
}
