<?php

namespace App\Http\Middleware;
use Log;
use Closure;
use Illuminate\Http\Request;

class PrimeiroMidleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Log::debug('Middleware: Executando o primeiro middleware Antes');
        $response = $next($request);
        Log::debug('Middleware: Executando o primeiro middleware Depois');
        return $response;
    }
}
