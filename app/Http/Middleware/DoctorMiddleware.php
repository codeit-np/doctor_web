<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorMiddleware
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
    //    if(Auth::check() && Auth::user()-> is_doctor== 0) {
        return $next($request);
    // }
    // else{

    // return response()->json('Not Authorized', 401);
   //}
    }
}
