<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Nếu đã đăng nhập, chuyển hướng đến dashboard
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }

        // Nếu chưa đăng nhập, cho phép truy cập login
        return $next($request);
    }
}