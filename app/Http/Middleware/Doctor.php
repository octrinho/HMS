<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Doctor
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
        if(!Auth::check()){

            return redirect()->route('login');
        }

        if(Auth::user()->role_id == 2){

            return $next($request);
        }

        elseif(Auth::user()->role_id == 1){
            return redirect()->route('admin');
        }

        elseif(Auth::user()->role_id == 3){
            return redirect()->route('receptionist');
        }

        else{

        }
    }
}
