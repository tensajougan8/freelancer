<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if ($guard == "freelancer" && Auth::guard($guard)->check()) {
            return redirect('/freelancer');
        }

        if ($guard == "client" && Auth::guard($guard)->check()) {
            return redirect('/client');
        }


        if (Auth::guard($guard)->check()) {
            return redirect('/home');
        }
        // if (Auth::guard($guard)->check()) {
        //     return redirect(RouteServiceProvider::HOME);
        // }

        return $next($request);
    }
}
