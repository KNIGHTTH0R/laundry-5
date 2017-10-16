<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Auth\LoginController;
use Closure;
use Illuminate\Support\Facades\Auth;

class RESTAuth
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
        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password), true)) {
            if (Auth::user()->role == 'staff') 
            {
                return $next($request);
            } else {
                return response('denied', 403);
            }
        }
        return response('failed', 404);
    }

}
