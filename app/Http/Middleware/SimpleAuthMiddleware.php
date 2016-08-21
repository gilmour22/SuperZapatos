<?php

namespace SuperZapatos\Http\Middleware;

use Closure;
use Illuminate\Foundation\Application;
use \Illuminate\Http\Request;
use \Illuminate\Http\Response;
use Auth;

class SimpleAuthMiddleware
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

        if (!$this->basic_validate($request->header('PHP_AUTH_USER'), $request->header('PHP_AUTH_PW'))) {
            return response()->json(['error_msg'=>'Not authorized', 'error_code'=>'401', 'success'=>'false'], 401);
        }
        return $next($request);
    }

    private function basic_validate($user, $password)
    {
        if ($user == 'my_user' && $password == 'my_password') {
            return true;
        }
        return false;
    }


}
