<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AllowGoToAdmin
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
        if (Auth::check()) {
          $user = $user = auth()->user();
          if($user->group != "post" && $user->group != "partner" && $user->group != "admin") {
            auth()->logout();
            return redirect("/");
          }
        } else
          return redirect("/login");

        return $next($request);
    }
}
