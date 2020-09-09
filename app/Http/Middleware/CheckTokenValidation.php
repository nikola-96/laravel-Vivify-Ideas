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
        $tokenUser = $request->bearerToken();
            foreach($tokens as $token){
                if ($tokenUser ===  $token){
                    return abort(401, 'Unauthorized');
                }
            }
            return $next($request);        
    }
}
