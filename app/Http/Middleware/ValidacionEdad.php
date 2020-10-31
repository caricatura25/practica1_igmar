<?php

namespace App\Http\Middleware;

use Closure;

class ValidacionEdad
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
        if ($request->edad < 18) {
            return abort(403,'edad no valida');
        }
        return $next($request);
    }
}
