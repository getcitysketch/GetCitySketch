<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class LandingController extends Controller
{



    //Default Landing Page Route
    public function index(){
        $posts = Post::all();

        return view('landing.index', compact('posts'));
    }
}



