<?php

namespace App\Http\Middleware;

use App\User;
use Closure;
use Illuminate\Contracts\Auth\Access\Gate;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
        if ($aa) {
            return $next($request);
        }else{
            return redirect('/welcome');
        }
        //        if (\Gate::allows('test', $request)) {
        //            return $next($request);
        //        }
    }
}
