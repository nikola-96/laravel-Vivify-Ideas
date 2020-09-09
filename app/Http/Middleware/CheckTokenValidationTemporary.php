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
        $tokens = Cache::store('array')->get('tokens');
        dd($tokens);

        return $next($request);
    }
}
