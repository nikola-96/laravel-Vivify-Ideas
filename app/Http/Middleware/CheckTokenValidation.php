<?php

namespace App\Http\Middleware;

use Closure;
use App\BlacklistToken;
use Illuminate\Http\Request;

class CheckTokenValidation
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
        $tokenUser = auth()->payload();
        $token = BlacklistToken::where('token', $tokenUser['jti'])->first();
        if($token) { 
            return abort(401, 'Unauthorized');
            }
            return $next($request);        
    }
}
