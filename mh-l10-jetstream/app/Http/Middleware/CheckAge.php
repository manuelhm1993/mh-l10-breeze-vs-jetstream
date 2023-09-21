<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Si el usuario es menor de edad se redirecciona a no-autorizado
        if($request->age < 18) {
            return to_route('no-autorizado');
        }

        // Si el usuario es mayor de edad, se le permite el acceso
        return $next($request);
    }
}
