<?php

namespace App\Http\Middleware;

use Closure;

class TeacherView
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
        if(!$user->role->view_teacher)
            return redirect("/admin");
        else
        return $next($request);
    }
}
