<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class authcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(!Session()->has('loginID') && (url('userstable') == $request->url() || (url('dashboard') == $request->url())))
        {
        return redirect('/')->with('Fail','You need to log-in first!');
        }
        return $next($request);
    
    }
}
