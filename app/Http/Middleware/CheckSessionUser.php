<?php
namespace App\Http\Middleware;

use Closure;
use Session;

class CheckSessionUser
{

    public function handle($request, Closure $next)
    {
        if (!$request->session()->exists('token')) {
            // user value cannot be found in session
            return redirect('/login');
        }

        return $next($request);
    }

}
