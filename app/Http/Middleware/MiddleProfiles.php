<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MiddleProfiles
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $profil): Response
    {
        if($request->user()->profils()->where('name', $profil)->exists()) return $next($request);

        return back()->with('success', "Vous n'avez pas acces a cette route");
    }
}
