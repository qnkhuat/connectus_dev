<?php

namespace App\Http\Middleware;

use Closure;

class UserUpdate
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
        $user = $user = auth()->user();
        if(!$user->role->update_user)
            return redirect("/hi");
        else
        return $next($request);
    }
}
