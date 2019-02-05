<?php

namespace App\Http\Middleware;

use Closure;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $role, $permiso = null)
    {   
        if(!$request->user()->hasRole($role)){
            abort(403);
        }


        if($permiso !== null && !$request->user()->can($permiso)){
            abort(403);
        }

        return $next($request);
    }
}
