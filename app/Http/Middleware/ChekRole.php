<?php

namespace App\Http\Middleware;

use Closure;
use MongoDB\Driver\Monitoring\Subscriber;

class ChekRole
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
        if (! $request->user()->hasRole('Subscriber')) {
            // Redirect...
        }

        return $next($request);
    }
}
