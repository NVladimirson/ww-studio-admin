<?php

namespace App\Http\Middleware;

use App\Jobs\NavbarJob;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class Navbar
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Cache::get('navbar') == null){
            NavbarJob::dispatch();
            info('Job NavbarJob dispatched!');
          }
        return $next($request);
    }
}
