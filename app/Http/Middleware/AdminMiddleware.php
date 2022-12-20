<?php

namespace App\Http\Middleware;

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
        if ($request->user() === null) {
            return response()->view('errors.access_denied', [], 401);
        }
        if ($request->user()->hasAnyRole('admin')) {
            return $next($request);
        }
        return response()->view('errors.access_denied', [], 401);
    }
}
