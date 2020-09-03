<?php

namespace App\Http\Middleware;

use Closure;
use App\User;


class VerifyIsAdmin
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
        if (!auth()->user()->isAdmin()) {

            return abort('403', 'You do not have permission to perform this action.');
        }
        return $next($request);
    }
}