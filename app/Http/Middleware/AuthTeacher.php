<?php

namespace App\Http\Middleware;

use Closure;

class AuthTeacher
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
        if($request->user()->type != 'tc')
        {
            return Redirect::route('teacher.login');
        }
        return $next($request);
    }
}
