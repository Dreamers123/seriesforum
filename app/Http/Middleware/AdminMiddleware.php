<?php

namespace App\Http\Middleware;
use App\Admin;
use Closure;

class AdminMiddleware
{

    public function handle($request, Closure $next)
    {
        if (auth()->guard('admin')->check())
        {
            return $next($request);
        }
           return redirect('/adminlogin');
    }
}
