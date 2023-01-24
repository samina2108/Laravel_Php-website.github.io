<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkdata
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::User() == null)
        {
            return redirect('login')->with('msg7', 'Please Login To View This Page');
        }
        return $next($request);
        
    }
    
}
