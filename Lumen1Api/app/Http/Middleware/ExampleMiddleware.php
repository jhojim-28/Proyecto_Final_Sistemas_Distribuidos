<?php

namespace App\Http\Middleware;

use Closure;

class ExampleMiddleware
{
    /**
     * maneja una solicitud entrante
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
