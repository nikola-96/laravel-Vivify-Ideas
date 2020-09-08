<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
class CheckAge
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
        $age = $request->age;

        if (!$request->exists('age') || $age < 18){
            
            return abort(422, 'Something went wrong');
        }
        return $next($request);
    }
}
