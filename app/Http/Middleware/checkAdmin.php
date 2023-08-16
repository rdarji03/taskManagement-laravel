<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class checkAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            if (auth()->user()->u_type == 1) {
                return $next($request);
            } else {
                return redirect()->route("staff.home")->with("error", "only admin can access this page");
            }
        } catch (\Throwable $th) {
            return redirect()->route("login");
        }
    }
}
