<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $role)
    {

        $user = Auth::user();
        if($role == 'admin' && !$user->is_admin || $role == 'user' && $user->is_admin){
            abort(403);
        }

        if (!Auth::check()) {
            return redirect('login');
        }

        return $next($request);

      

    
      
      

        // $user = Auth::user();

        // if($user->role_id == $roles){
        // return $next($request);
        // }

       
       

     
    }
}