<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Closure;

class BuyerMiddleware
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
        if ($request->user() && $request->user()->type != 'buyer')
        {
            return new Response(view('unauthorized')->with('role', 'BUYER'));
             
        }
        
        return $next($request);
    }
}
