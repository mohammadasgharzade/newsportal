<?php

namespace App\Http\Middleware;

use Closure;

class AdminAndSardabir
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
        if (auth()->user()->rule != 'ادمین' && auth()->user()->rule != 'سردبیر' ) {
            return redirect()->back();
        }
        return $next($request);
    }
}