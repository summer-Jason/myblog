<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;

class CheckLogin
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
    	//判断用户是否登录 
    if(!$request->session()->has('uid')){ 
        //若没有登录，跳转到登录页 
        return redirect('/login');}
        else{
        //若登录了，则执行下一步操作
        return $next($request);
    }
}
}
