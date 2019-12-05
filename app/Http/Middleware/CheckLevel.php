<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckLevel
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
            $user = Auth::User();
            if ($user->level == 1)
            {
                return $next($request);
            } else {
                return redirect(route('post.show'));
            }
        } else {
            return redirect(route('post.show'))->withError(__('You do not have permission to edit'));
        }
    }
}
