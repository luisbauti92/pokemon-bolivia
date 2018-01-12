<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class CheckPermiso
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
        // return $next($request);
        if(Auth::check() && Auth::user()->tipo=='admin'){
                return $next($request);
        }
        else{
            //return view('errors.login');
            return redirect('/');
        }
    }
}
