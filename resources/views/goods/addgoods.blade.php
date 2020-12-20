<!DOCTYPE html>
<html lang="en">
    <head>
       <meta charset="UTF-8">
       <link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css">      
    </head>
    <body>
<!--<form action='store' method='post'>  
  <table border='1' align='center' width="300px"> 
	<caption>添加商品</caption> 
	<tr>  
	  <td align='right'>商品名称:</td>   
	 <td><input type='text' name='goodstitle' placeholder="输入商品名称 "></td>  
	  </tr>   
	  <tr> 
		 <td align='right'>商品描述:</td>  
		   <td><input type='text' name='goodscontent' placeholder="输入商品描 述"></td>  
			</tr> 
			<tr>   
			 <td colspan='2' align='center'> 
				 <input type='submit' value='添加'/>   
				  </td> 
				   </tr> 
					</table> 
					{{csrf_field()}}  
					 </form> -->
					 <form action='store' method='post' class="form-horizontal">
            <h3 class="text-center">添加商品</h3> 
            <div class="form-group">
                <label for="name" class="col-sm-2 control-label">商品名称:</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name='goodstitle' placeholder="输入商品名称"  >
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="col-sm-2 control-label">商品描述:</label>
                <div class="col-sm-9">
                    <input type='text' name='goodscontent' placeholder="输入商品描述"  class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-9">
                    <button type="submit" class="btn btn-danger btn active">添加</button>
                </div>
            </div>
            {{csrf_field()}} 
        </form>
 </body>
  </html>
 
 
 