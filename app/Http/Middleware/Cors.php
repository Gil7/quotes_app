<?php

namespace App\Http\Middleware;

use Closure;

class Cors
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
        //the first line is to allow request from anywhere
        //the second line s to allow different kind of requests methods from clients
        return $next($request)->header('Acces-Control-Allow-Origin','*')
        ->header('Acces-Control-Allow-Methods','GET,POST,PUT,PATCH,DELETE,OPTIONS')
        ->header('Acces-Control-Allow-Headers','Content-Type, Authorization');
    }
}
