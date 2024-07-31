<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EmployeeMiddleware
{
   
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->usertype !== 'employee') {
            return redirect('/');
        }
        return $next($request);
    }
}
