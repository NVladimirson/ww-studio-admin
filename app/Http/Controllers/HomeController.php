<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use Illuminate\Support\Facades\URL;
use App\Models\Navigations;
use App\Models\Sections;
use Encore\Admin\Grid\Filter\Group;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;


use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function index(Request $request){

        $route_name = FacadesRequest::route()->getName();

        $group = Groups::where('group',$route_name)->get('id');

        $content = [];

        if($group){
            $content = Navigations::with('sections')->find($group)->first()->sections;
            if($content){
                $content = $content->sortBy('position')->pluck('html');
                return view('pages.main', compact('content'));
            }
            dd($content);
        }
        else{
            abort(403);
        }

        return view('pages.main');

    }
    
}
