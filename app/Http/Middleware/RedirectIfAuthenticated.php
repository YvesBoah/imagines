<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
              // Debut de Rajouts de fonction pour l'admin
      // Debut de Rajouts de fonction pour l'admin

    public function handle($request, Closure $next, $guard = null)
    {

            switch ($guard) {
                case 'admin':
                    if (Auth::guard($guard)->check() ) {
                      return redirect()->route('admins_posts.dashboard');
                    }
                    break;
                 case 'admin_ecole':
                    if (Auth::guard($guard)->check() ) {
                      return redirect()->route('admin_ecole.dashboard');
                    }
                    break;
                
                default:
                    if (Auth::guard($guard)->check()) {
                        return redirect('/home');
                     }
                    break;
            }

        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        return $next($request);
    }


      // Fin de Rajouts de fonction pour l'admin
 // Fin de Rajouts de fonction pour l'admin
}
