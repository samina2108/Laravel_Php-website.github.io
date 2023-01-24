<?php

namespace App\Http\Middleware;

use Closure;
use session;
class adminauth
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
        if(Session('adminuser') == null)
        {
            return redirect('Adminlogin')->with('msg7', 'Please Login To View This Page');
        }
        return $next($request);
    }
}
