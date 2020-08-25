<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;

class AboutController extends Controller
{
    //Default About Page Route
    public function index(){
        $features = Feature::all();

        return view('about.index', compact('features'));
    }
}
