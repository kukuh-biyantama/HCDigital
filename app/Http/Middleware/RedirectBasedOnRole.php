<?php

// app/Http/Middleware/RedirectBasedOnRole.php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectBasedOnRole
{
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role === 'superadmin') {
                return redirect()->route('users.indexadmin');
            } elseif ($user->role === 'admin') {
                return redirect()->route('users.index');
            }
        }

        return $next($request);
    }
}
