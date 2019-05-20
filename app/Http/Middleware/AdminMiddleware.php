<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
//        $role = $request->user();
        $role = Auth::user()->role;
        if ($role!="Admin")
        {
            return redirect()->route('products.index');
        }
        return $next($request);
    }
}
