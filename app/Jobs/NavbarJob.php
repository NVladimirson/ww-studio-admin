<?php

namespace App\Jobs;

use App\Models\Navigations;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class NavbarJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        
        $navigations = Navigations::with('group')->get()->keyBy('id');
        foreach($navigations as $key=>$nav_item){
            if($nav_item->parent){
                if($navigations[$nav_item->parent]->child){
                    $childs = $navigations[$nav_item->parent]->child;
                    $childs[] = $nav_item;
                    $navigations[$nav_item->parent]->child = $childs;
                }
                else{
                    
                    $navigations[$nav_item->parent]->child = [$nav_item];
                } 
                unset($navigations[$key]);
            }
        }
        $html = '<ul class="header-nav">';
        
        foreach($navigations as $key=>$li){
            if($li->child){
                
                $html .=  '<li class="hasSubMenu">';
                $html .= '<a href="'.route($li->group->group).'">'.$li->title.'</a>';
                $html .= '<div class="sub-menu">';
                $html .= '<ul>';
                foreach($li->child as $child){
                    //dump($child->group->group);
                    $html .= '<li><a href="'.route($child->group->group.'.show', ['title' => Str::slug($child->title, '-')]).'">'
                    .$child->title.'</a></li>';
                }
                $html .= '</ul>';
                $html .= '</div>';
                $html .= '</li>';
                
            }
            else{
                $html .= '<li><a href="'.route($li->group->group).'">'.$li->title.'</a></li>';
            }
        }

        $html .= '</ul>';

        Cache::set('navbar',$html);
    }
}
