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
        $tokens = BlacklistToken::all();
        $tokenUser = auth()->payload();
            foreach($tokens as $token){
                if ($tokenUser['jti'] ===  $token->token){
                    return abort(401, 'Unauthorized');
                }
            }
            return $next($request);        
    }
}
