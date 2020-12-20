<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; 
class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // 
        // return '返回商品总览列表'; 
		$goods=DB::table('blog_goods')->get();
		return view ('goods/index',['goods'=>$goods]);
		
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return '显示创建商品的表单';
		return view('goods/addgoods'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         // return '存储新的商品信息';
		 $title=$request->input('goodstitle');
		 $content=$request->input('goodscontent');
		 $insert=DB::table('blog_goods')->insert(['goods_title'=>$title,'goods_content'=>$content]);
		 return redirect('goods')->with('message','添加数据成功');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
//        return '显示某条商品信息'.$id;
			$goods_info=DB::table('blog_goods')->where('goods_id',[$id])->get();
			return view('goods/show',['goods_info'=>$goods_info]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        	$goods_info=DB::table('blog_goods')->where('goods_id',[$id])->get();
//        return '显示修改某条商品信息的表单'.$id;
		return view('goods/editgoods',['goods_info'=>$goods_info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//      return '具体修改商品的逻辑代码'.$id; 
		$title=$request->input('goodstitle');
		$content=$request->input('goodscontent');
		$goods=DB::table('blog_goods')->where('goods_id',[$id])->update(['goods_title'=>$title,'goods_content'=>$content]);
		return redirect('goods')->with('message','修改数据成功!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
//           return '删除某条商品'.$id; 
	$goods_info=DB::table('blog_goods')->where('goods_id',[$id])->delete();
	return redirect('goods')->with('message','删除数据成功!!!');
    }
}
