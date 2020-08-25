<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    //Default Gallery route
    public function index(){
        return view('gallery.index');
    }
}
