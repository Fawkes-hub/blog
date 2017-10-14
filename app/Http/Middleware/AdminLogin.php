<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
        //需要在这里面进行判断session是否存在
        if(!session('user')){
            return redirect('admin\login');
        }
        return $next($request);
    }
}
