<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class BackstageAuth
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
        $user = Auth::user()->username;
        if (in_array($user,config('backstage')))
        {
            return $next($request);
        } else {
            session()->flash('danger','您不是管理员，不能进行这项操作');
            return redirect()->route('/');
        }

    }
}
