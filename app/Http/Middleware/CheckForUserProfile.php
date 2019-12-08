<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckForUserProfile
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
        if ( Auth::user() ) {
            if ( !Auth::user()->profile ) {
                return redirect()->route('profile.create');
            }
        }

        return $next($request);
    }
}
