<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class RedirectIfNotSuperadmin
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
	            if ($request->User()->type !='superadmin') {
	                return redirect('login');
	            }
	             return $next($request);
	        }
	        return redirect('login');
    }
		
}
