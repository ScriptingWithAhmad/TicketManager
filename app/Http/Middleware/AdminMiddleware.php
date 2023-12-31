<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth ;

class AdminMiddleware
 {
    /**
    * Handle an incoming request.
    *
    * @param  \Closure( \Illuminate\Http\Request ): ( \Symfony\Component\HttpFoundation\Response )  $next
    */

    public function handle( Request $request, Closure $next ): Response
 {
        if ( Auth::check() ) {

            if ( Auth::user()->role == '1' ) {

                return $next( $request );

            } elseif ( Auth::user()->role == '2' ) 
 {
                return redirect( '/Agent' )->with( 'message', 'Agent-Dashboard' );
            } else {
                return redirect( '/User' )->with( 'message', 'Access Denied' );
            }

        } else {
            return redirect( '/login' )->with( 'message', 'User-Dashboard' );

        }

        return $next( $request );
    }
}
