<?php

namespace App\Http\Middleware;

use Closure;

class UserDestroy
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
        if(!$user->role->destroy_user)
            return redirect("/admin");
        else
        return $next($request);
    }
}
