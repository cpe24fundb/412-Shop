<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $role = 'manager')
    {
        $token = $request->cookie('token');

        $user = User::where('token', $token)->first();
        if (!$user || 
            ($role == 'manager' && !$user->manager_flag) ||
            ($role == 'founder' && !$user->founder_flag)
        ) {
            return response('Unauthorized.', 401);
        }

        return $next($request);
    }
}
