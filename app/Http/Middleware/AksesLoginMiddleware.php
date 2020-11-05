<?php

namespace App\Http\Middleware;

use Closure;

class AksesLoginMiddleware
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
        if(!session('Berhasil_login')){
            return redirect('/');
        }
        return $next($request);
    }
}
