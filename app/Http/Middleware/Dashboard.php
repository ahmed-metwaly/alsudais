<?php
namespace App\Http\Middleware;

use App\Groups;
use Closure;
use Illuminate\Support\Facades\Auth;
//use App\Http\Requests;

class Dashboard {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request $request
	 * @param  \Closure                 $next
	 *
	 * @return mixed
	 */
	public function handle( $request, Closure $next ) {

		if ( Auth::check() ) {

		    if ( Auth::user()->status != 1 ){

                return redirect()->route('login')->with('mNo', trans('messages.notActive'));
            }


             return $next($request);
		}

		return redirect('/cpa-login/');
	}
}

