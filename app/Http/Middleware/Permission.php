<?php

namespace App\Http\Middleware;

use Closure;

class Permission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$number_permission)
    {

        //$permission = auth()->guard('web')->user()->permission;

        if(session()->has('user_login')){
            $user = session()->get('user_login');
            $permission_user = json_decode($user[0]['premisess']);
        }else{
            //mean api token
            $permission_user = json_decode(request()->user()->permission);
        }

        if(in_array($number_permission,$permission_user)):
                return $next($request);
            else:
                return redirect()->route('redirect_permission_api_or_web',['api_or_web'=>json_encode($request->segments())]);
            endif;

    }
}
