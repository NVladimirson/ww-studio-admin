<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function index(Request $request){
        return view ('pages.programme.programme');
    }
    
}
