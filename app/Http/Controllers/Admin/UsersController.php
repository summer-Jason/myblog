<?php 
 
namespace App\Http\Controllers\Admin; 
 
use Illuminate\Http\Request;
 use App\Http\Controllers\Controller;
  use Illuminate\Support\Facades\Session;
   class UsersController extends Controller {  
	   //   
		 function check(Request $request){  
			 $username = $request->get('username'); 
			   $password = $request->get('password');  
				   //设置Session 值 
					 Session::put('uname',$username); 
					 if($username=='admin'&&$password=='123'){ 
						 //创建session,设置session值 
						 Session::put('uid','1'); 
							//$request->session()->put('uid', '1');
									//跳转到后台的首页  
									  return redirect('/');  
										}else{    //跳转回登录页
											return redirect()->back(); 
											  } 
											   }   
												 function exit(Request $request){ 
													 $request->session()->flush(); 
														return redirect('/login');  
														 } 
														} 