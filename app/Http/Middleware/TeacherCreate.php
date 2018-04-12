<?php

namespace App\Http\Middleware;

use Closure;

class TeacherCreate
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
        if(!$user->role->create_teacher)
            return redirect("/hi");
        else
            return $next($request);
    }
}
