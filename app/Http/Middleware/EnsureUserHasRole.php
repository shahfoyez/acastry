<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EnsureUserHasRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $teacher, $industry)
    {
       $roles = Auth::check() ? Auth::user()->role->pluck('role')->toArray() : [];

       if(in_array($teacher, $roles)) {
           return $next($request);
       }else if (in_array($industry, $roles)) {
           return $next($request);
       }
       return redirect('/')->with('error','You are allowed to perform this action');

    }
    // public function handle(Request $request, Closure $next, $role)
    // {
    //     // if (! $request->user()->hasRole($role)) {
    //     //     // return route('error');
    //     //     return redirect('error');
    //     // }
    //     // return $next($request);
    //     if (Auth::user() &&  Auth::user()->role == 'teacher') {
    //         return $next($request);
    //    }

    //    return redirect('/')->with('error','You are allowed to perform this action');

    //    $roles = Auth::check() ? Auth::user()->role->pluck('role')->toArray() : [];

    //    if (in_array($teacher, $roles)) {
    //        return $next($request);
    //    } else if (in_array($industry, $roles)) {
    //        return $next($request);
    //    }
    //    return redirect('/')->with('error','You are allowed to perform this action');

    // }
}
