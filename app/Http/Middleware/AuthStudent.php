<?php

namespace App\Http\Middleware;

use Closure;

class AuthStudent
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
        if(Auth::user()->id === $request->id || Auth::user()->checkRole() == 'su' || Auth::user()->checkRole() == 'tc' )
        {
            return $next($request);
        }
        abort(403);
    }
}
