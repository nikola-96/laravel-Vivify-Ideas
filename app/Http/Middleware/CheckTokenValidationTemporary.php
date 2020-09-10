<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Cache;


class CheckTokenValidationTemporary
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
        if(Cache::has('token')){
            $value = Cache::get('token');
            $token = auth()->payload();
                if($value === $token['jti'] ){

                    return abort(401, 'Unauthorized');
                }
        }
            return $next($request);
        }
}
