<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variable;

class AdminController extends Controller
{
    //Admin Controller Login Route
    public function index(){
        $variables = Variable::all();


        return view('admin.index', compact('variables'));
    }
}
