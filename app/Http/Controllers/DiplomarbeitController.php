<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplomarbeitController extends Controller
{

    //Default Diplomarbeit route
    public function index(){
        return view('diplomarbeit.index');
    }
}
