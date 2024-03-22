<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user() && auth()->user()-> role == 1)
        {
            $user = Auth() -> user();
            $name = $user -> name;
            session(['name' => $name]);
            $email = $user -> email;
            session(['email' => $email]);
            return $next($request);
        }
        /*
        elseif(auth()->user() && auth()->user()-> role == 0)
        {
            return redirect('/');
        }
        */
        else
        {
            return redirect('/login');
        }


        if (!Auth::check()) {
            return redirect('/login'); // Redirect if not logged in
        }

    }
}
