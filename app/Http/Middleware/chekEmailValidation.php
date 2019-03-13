<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class chekEmailValidation
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
        $user = Auth::user();
        echo "<pre>";
        var_dump($user->email_verified_at);
        echo "</pre>";
        if (empty($user->email_verified_at))
        {

            die("Test");
        }



        return $next($request);
    }
}
