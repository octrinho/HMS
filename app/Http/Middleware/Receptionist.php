<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Receptionist
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

        if(Auth::user()->role_id == 3){

            return $next($request);
        }

        elseif(Auth::user()->role_id == 2){
            return redirect()->route('doctor');
        }

        elseif(Auth::user()->role_id == 1){
            return redirect()->route('admin');
        }

        else{

        }
    }
}
