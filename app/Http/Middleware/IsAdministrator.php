<?php

namespace App\Http\Middleware;

use Closure;

class IsAdministrator
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
        if($request->session()->get('quyenhan')=="ql")
            return $next($request);
        abort(403);
    }
}
