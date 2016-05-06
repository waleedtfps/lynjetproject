<?php

namespace App\Http\Middleware;
use User;
use redirect;
use Auth;
use Closure;
class RedirectIfNotCompany
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
            if (($request->User()->type !='company')&&($request->User()->type !='admin')&&($request->User()->type !='superadmin')) {
                return redirect('login');
            }
             return $next($request);
        }
        return redirect('login');
    }
}
