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
        if($request->user()->type != 'st')
        {
            return Redirect::route('student.login');
        }
        return $next($request);
    }
}