<?php

namespace App\Http\Controllers;

use App\Models\Groups;
use App\Models\Navigations;
use App\Models\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Illuminate\Support\Str;
class PageController extends Controller
{
    public function index(Request $request, $title=''){
//        $child_name = '';
        $content = [];

        // if(Str::finish($group_name, '.show')){
        //     dd(Str::finish($group_name, '.show'));
        //     $child_name =  (string) Str::of($request->url())->basename();
        //     $group_name = Str::replaceLast('.show','',$group_name);
        // }
        $group_name = Str::replaceLast('.show','',FacadesRequest::route()->getName());     
        $group_id = Groups::where('group',$group_name)->get('id')->first()->id;
        

        if($group_id){

            if(Str::of($title)->isNotEmpty()){

                $navigations = Navigations::with('sections')->where('group_id',$group_id)->get();
                foreach($navigations as $child){
                    if($title == Str::of($child->title)->slug('-')){
                        $navigation = $child;
                    }
                }
                if(!isset($navigation)){
                    abort(404);
                }

            }
            else{
                $navigation = Navigations::with('sections')->find($group_id);
            }

            
            if($navigation){
                $content = $navigation->sections->sortBy('position')->pluck('html');
            }
            return view('pages.main', compact('content'));
        }
        else{
            abort(403);
        }

        return view('pages.main');

    }
    
}
