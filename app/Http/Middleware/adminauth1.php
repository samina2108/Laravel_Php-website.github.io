<?php

namespace App\Http\Middleware;

use Closure;

class adminauth1
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
        if(Session('adminuser') != null)
        {
            return redirect('Admin')->with('msg8', 'Aleady Login');
        }
        return $next($request);
    }
}
