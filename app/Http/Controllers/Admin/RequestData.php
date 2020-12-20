<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
class RequestData extends Controller
{
    public function gpost(Request $request)
 {
//  	//获取单个值
	 $username = $request->input('username');
	 $pwd = $request->input('pwd');
	 $email = $request->input('email');
// //	 return "邮箱地址：".$email. "<br/>用户名：".$username."<br/>密码：".$pwd;
// 	 // 获取完整 URL,有请求参数...
//  $url = $request->fullUrl();
// // return '请求的完整路径是：'.$url;
// 	if($request->isMethod('post'))
//  {return '请求的方法是 POST';}
//  elseif($request->isMethod('get'))
// // {return '请求的方法是 GET';}
// //使用另外一种方式获取
//  $name = $request->username;
//  // return $name;

// return redirect('/zhuce3')->withInput();
 // 响应信息到页面，并将 cookie 写入用户浏览器
  $minutes = 24 * 60;
  // return response('Hello World')->cookie('username', $username, $minutes);
  $cookie = cookie('username', $username, $minutes);
   $value = $request->cookie('username');
   return  '将cookie写入浏览器'.$cookie;

	}
}