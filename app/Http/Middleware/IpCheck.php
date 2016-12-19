<?php

namespace App\Http\Middleware;

use Request;
use Closure;

class IpCheck
{
    /**
     * Only accessible to one IP.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(getenv('REMOTE_ADDR') != Request::getClientIp())
        {
            abort(403);
        }
        return $next($request);
    }
}
