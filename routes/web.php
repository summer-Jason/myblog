<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
////前台路由组（没有任何条件限定）
//Route::group([],function(){
// //加载首页的路由
// Route::get('/',function(){
// return "这里是前台首页！";
// });
//});
//Route::middleware('login')->group(function(){ 
// //加载首页的路由 
//  Route::get('/',function(){ 
//      return "欢迎来到前台首页。在这里你将看到属于你的世界。！"; 
//  }); 
//});
//
//Route::get('/login', function () {
//  return view('login');
//});
//Route::post('admin/check', "Admin\UsersController@check");
//Route::resource('goods', 'Admin\GoodsController'); 
// Route::get('/zhuce',function()
// { return view('zhuce');});
// Route::get('admin/httpget',"Admin\RequestData@gpost");
// Route::get('/zhuce2',function()
// { return view('zhuce2');});
// Route::post('admin/gpost',"Admin\RequestData@gpost");
// Route::get('/zhuce3',function()
// { return view('zhuce3');});
//Route::middleware('login')->group(function(){  
//	//加载首页的路由      
//	Route::get('/', function () {  
//	return view('index');
//	}); 
//}); 
	Route::get('/login', function () {
		return view('login'); 
		});
	Route::post('admin/check',"Admin\UsersController@check"); 
	Route::get('admin/exit',"Admin\UsersController@exit"); 	
   Route::get('/test',function(){
   return view('test');
   });
   Route::get('/child',function(){
   return view('child');
   });
   Route::get('/child2',function(){
   return view('child2');
   });
   Route::get('/child3',function(){
   return view('child3');
   });
Route::resource('goods', 'Admin\GoodsController'); 
Route::post('goods/store','Admin\GoodsController@store'); 
Route::get('goods/del/{goods_id}','Admin\GoodsController@destroy');
Route::get('/',function(){
	return view('layouts/Default');
});
 Route::get('/',function(){
 	return view('Default');
 });
