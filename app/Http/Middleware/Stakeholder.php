<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Stakeholder
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
        $user = auth()->user();
        if($user && $user->hasRole('customer')){
            return redirect('/');
            // abort(405, 'you are not authorized to this page');
        }
        return $next($request);
    }
}
