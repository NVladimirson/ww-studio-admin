<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeminarsController extends Controller
{
    public function index(Request $request){
        return view ('pages.seminars.seminars');
    }
}
