<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkdata1
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
        if(Auth::User() != null)
        {
            return redirect('profile')->with('msg8', 'Login Sucsessfully');
        }
        return $next($request);

        
    }
}
