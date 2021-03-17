<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksMediaController extends Controller
{
    public function index(Request $request){
        return view ('pages.booksmedia.booksmedia');
    }
}
