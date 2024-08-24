<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Usertype
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next , $role=null): Response
    {

        if (auth()->check()) {
            // Check if the user type matches the specified role
            if (auth()->user()->usertype == 'admin') {
                return $next($request);
            } else {
                // Redirect non-admin users to the home page with an error message
                return redirect()->route('front.home')->with(['error' => 'You do not have permission to access this page.']);
            }
        }

        // If the user is not authenticated, proceed with the request
        return $next($request);

    }
}
