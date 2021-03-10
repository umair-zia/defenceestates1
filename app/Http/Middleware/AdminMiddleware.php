<?php

namespace App\Http\Middleware;
use Symfony\Component\HttpFoundation\Response;
use Closure;

class AdminMiddleware
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
        error_log($request->user()->type);
        if ($request->user() && $request->user()->type != 'admin')
        {
            return new Response(view('unauthorized')->with('role', 'ADMIN'));
             
        }
        
        return $next($request);

    }
}
