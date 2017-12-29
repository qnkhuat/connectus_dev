<?php

namespace App\Http\Middleware;

use Closure;

class OrderListAll
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
        if(!$user->role->view_order)
            return redirect("/admin");
        return $next($request);
    }
}
