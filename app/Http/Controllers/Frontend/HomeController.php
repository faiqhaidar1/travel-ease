<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $travel_packages = TravelPackage::get();
        $posts = Post::take(3)->latest()->get();
        return view('frontend.home', compact('travel_packages', 'posts'));
    }
}
