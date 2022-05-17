<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isProfile
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role != "User"){
            
        if(Auth::user()->role == null || Auth::user()->full_name == null ||Auth::user()->email == null || Auth::user()->status == null|| Auth::user()->address == null)
        {

              return redirect()->route('profile');
        }
        else 
        return $next($request);
        }
 else 
        return $next($request);
        
    }
}
