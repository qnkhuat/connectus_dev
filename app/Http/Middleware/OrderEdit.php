<?php

namespace App\Http\Middleware;

use Closure;

class OrderEdit
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
        if(!$user->role->update_order)
            return redirect("/admin");
        return $next($request);
    }
}
