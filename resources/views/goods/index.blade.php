<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css">
		<title></title>
	</head>
	<style>
		#th1{
			text-align: center;
			width:90%;
		}
	</style>
	<body>
		<h1 style="color: red; text-align: center; margin-top:10px;background: linear-gradient(to bottom,white,black);
	width:100%;
	height:50px;
	color: red;
} "">科技公司</h1>
	
{{session()->get('message')}} 
<ul class="nav nav-pills">
		 <li><a href="{{('./')}}"><span class="glyphicon glyphicon-home">首页</a></li>
		 <li class="active"><a href="{{('goods')}}"><span class="glyphicon glyphicon-th-large">商品信息列表</a></li>
		  <li><a href="{{('goods/create')}}"><span class="glyphicon glyphicon-plus">添加商品</a></li>
</ul>

<table border="1" align="center" class="table table-striped table-bordered table-hover "> 
 <caption><h1 align="center" class="bg-danger text-info">商品信息列表</h1></caption>
 
   <tr class="info"> 
	<th>ID</th> 
  	<th>商品名称</th>  
   	<th id="th1" class="bg-danger text-info"">商品描述</th>  
	<th colspan="2">操作</th> 
	 </tr> 
 @foreach($goods as $g) 
  <tr> 
	<td>{{$g->goods_id}}</td> 
	  <td><a href="{{url('goods',['goods_id'=>$g->goods_id])}}">{{$g->goods_title}}</a>
	  </ td> 
	  <td>{{$g->goods_content}}</td>
	  <td><a href="goods/{{$g->goods_id}}/edit">修改</a></td>
	   <td><a href="javascript:if(confirm('您确认删除商品名称为：{{$g->goods_title}} 的数据吗 ?')){location.href='{{url('goods/del',['goods_id'=>$g->goods_id])}}'};"> 删 除</a></td>
	   
	   </tr> 
	   @endforeach 
	   </table> 
	   <nav class="text-center">
	               <ul class="pagination">
	                   <li><a href="">上一页</a></li>
	                   <li class="active"><a href="">1</a></li>
	    
	                   <li><a href="/goods">2</a></li>
	                   <li><a href="">3</a></li>
	                   <li><a href="">...</a></li>
	                   <li><a href="">下页</a></li>
	               </ul>
	           </nav>
			    
	   </body>
</html>