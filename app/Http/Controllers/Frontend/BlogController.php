<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index()
    {
        $posts = Post::inRandomOrder()->get();
        return view('frontend.blog.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('frontend.artikel', compact('post'));
    }
}
