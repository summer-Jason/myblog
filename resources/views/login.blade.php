<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css">   
</head>
<body>	
<!-- <div class="login-page">
    <div class="login-main">  	
    	 <div class="login-head">
				<h1>用户登录</h1>
			</div>
			<div class="login-block">
				<form action="{{url('admin/check')}}" method="post">
					<input type="text" name="username" placeholder="用户名" required="请填写用户名">
					<input type="password" name="password" class="lock" placeholder="密码">
					<input type="submit" value="登录">	
					{{csrf_field()}}
				</form>
			</div>
      </div>
</div> -->
<div class="modal show" tabindex="-1"> 

	<div class="modal-dialog" style="margin-top: 200px;width:700px;"> 
			
		
		<div class="modal-content"> 
			
		    <div class="jumbotron" style="padding:20px;">
		    
		        <div class="modal-header"> 			
		           <h1>登录！</h1>
                   <p>欢迎使用本系统。</p>
                </div>
                
	            <div class="modal-body"> 
				  <form action="{{url('admin/check')}}" method="post" class="form-inline">
                	<div class="form-group">
					<input type="text" name="username" placeholder="用户名" required="请填写用户名" class="col-4 form-control">
					<input type="password" name="password"  placeholder="密码" class="col-4 form-control lock">					
					<input type="submit" class="btn btn-primary col-2 form-control" role="button" value="登录">	
						</div>
					{{csrf_field()}}
				</form>
		       </div>
		       
		    </div>	
		    
		</div>
		
	</div>
	
</div>



</body>
</html>


