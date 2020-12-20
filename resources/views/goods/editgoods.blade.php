<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css">      
    </head>
    <body>
@foreach($goods_info as $g)
<form action="{{url('goods',['goods_id'=>$g->goods_id])}}" method='post'>  
  <table border='1' align='center' width="60%" class="form-horizontal"> 
	<caption>修改商品</caption> 
	<tr>  
	  <td align='right'>商品名称:</td>  
	 <td><input type='text'  name='goodstitle' value="{{$g->goods_title}}"  style="width: 600px;height:30px;"></td>  
	  </tr>   
	  <tr> 
		 <td align='right'>商品描述:</td>  
		   <td><input type='text'  name='goodscontent' value="{{$g->goods_content}}"  style="width:600px;height:30px;"></td>  
			</tr> 
			<tr>   
			 <td colspan='2' align='center'> 
				 <input type='submit'  value='修改'/>   
				  </td> 
				   </tr> 
				   @endforeach
					</table> 
					{{csrf_field()}}  
					{{method_field('PUT')}}
					 </form>
					 </body>
  </html>