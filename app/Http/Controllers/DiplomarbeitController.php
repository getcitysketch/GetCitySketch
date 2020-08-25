<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Variable;

class DiplomarbeitController extends Controller
{

    //Default Diplomarbeit route
    public function index(){
        $da_progress_overall = Variable::where('name', 'DA_progress_overall')->first();
        $da_progress_planning = Variable::where('name', 'DA_progress_planning')->first();
        $da_phase = Variable::where('name', 'DA_phase')->first();

        return view('diplomarbeit.index', compact('da_progress_overall', 'da_progress_planning', 'da_phase'));
    }
}
