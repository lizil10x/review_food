<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Events\Logout;
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
        if(Auth::check()){
            $user = Auth::user();
            if($user->role == 1)
                return $next($request);
            else
                Auth::logout();
                return redirect('dang-nhap');
        }else{
            Auth::logout();
            return redirect('dang-nhap');
        }
    }
}
