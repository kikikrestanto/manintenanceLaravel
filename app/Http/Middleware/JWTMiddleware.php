<?php

namespace App\Http\Middleware;

use Closure;
use Tymon\JWTAuth\Facades\JWTAuth;

class JWTMiddleware
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
        $message = '';

            try{
                //checks token validation
                JWTAuth::parseToken()->authenticate();
                return $next($request);

        }   catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e){
            //do whatever you want to do if fa token is expired
            $message = 'token expired';
        }   catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e){
            //do whatever you want to do if fa token is invalid
            $message = 'token invalid';
        }   catch (\Tymon\JWTAuth\Exceptions\JWTException $e){
            $message = 'provide_token';
        }
        return response()->json([
            'success' => false,
            'message' => $message
        ]);
    }
}
