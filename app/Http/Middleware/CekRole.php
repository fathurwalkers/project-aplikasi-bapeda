<?php

namespace App\Http\Middleware;

use Closure;

class CekRole
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
        $users = session('data_login');
        // $user = session('data_login_admin');
        if (!$users) {
            return redirect()->route('login');
        }
        return $next($request);
    }
}
