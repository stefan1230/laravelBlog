<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // if($user = Auth::user()){
        //     if($user->role_id = 1){
        //         return $next($request);
        //     }
        // }

        $user = $request->user();
        if($user->role->name === 'Administrator'){
            return $next($request);
        }
        return redirect('/blog');
        // return $next($request);
    }
}
