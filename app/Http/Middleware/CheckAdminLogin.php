<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckAdminLogin
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
        $auth = Auth::check();
        dd($auth);
        if ($user->is_admin) {
            return redirect()->to('admin_test');
        }
        dd('khong phai admin');

        // return $next($request);
    }
}
