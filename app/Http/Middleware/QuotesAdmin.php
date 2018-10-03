<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class QuotesAdmin
{

    public function handle($request, Closure $next)
    {
        $user = $request->user();
        if ($user && $user->email == "ab@gmail.com")
        {
          return $next($request);
        }
        return redirect('/login');
    }
}
