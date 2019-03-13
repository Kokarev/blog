<?php

namespace App\Http\Middleware;

use Closure;

class chekage
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
        die("are you 18 ys old?");
        return $next($request);
    }

}
