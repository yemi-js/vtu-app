<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAdminAuth
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

        if (Auth::check()) {
                if (Auth::user()->role == "1") {
                    return $next($request);
                    } else {
                        // abort(403, 'Unauthorized action.');
                        return redirect('/users/dashboard');
                }

            } else {
                  abort(403, 'Unauthorized action.');
                        return redirect('dashboard');
            }
            return $next($request);
        }

        // ;


}
