@extends('layouts/main2')
@section('title','首页')
@section('content')
<html>
	<head>
		<!--这里是一个单行占位-->
		<title>应用程序名称-@yield('title')</title>
	</head>
	<style>
	</style>
	<body>
<div class="container">
     <div class="row">                 
         
         <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="华为.jpg"  style="width:120px;height:100px" >
                <div class="caption">
                    <h3>华为</h3>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">
                            了解更多
                        </a>
                        <a href="#" class="btn btn-default" role="button">
                            详细
                        </a>
                    </p>
                </div>
            </div>
        </div>
         
          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="苹果.jpg" style="width:120px;height:100px" >
                <div class="caption">
                    <h3>苹果</h3>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">
                            了解更多
                        </a>
                        <a href="#" class="btn btn-default" role="button">
                            详细
                        </a>
                    </p>
                </div>
            </div>
        </div>
<div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="小米.png" style="width:120px;height:100px" >
                <div class="caption">
                    <h3>小米</h3>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">
                            了解更多
                        </a>
                        <a href="#" class="btn btn-default" role="button">
                            详细
                        </a>
                    </p>
                </div>
            </div>
        </div>

   </div>  
</div>
   </div>  
</div>
 <!-- <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
                <img src="小米.png" style="width:120px;height:100px" >
                <div class="caption">
                    <h3>小米</h3>
                    <p>
                        <a href="#" class="btn btn-primary" role="button">
                            了解更多
                        </a>
                        <a href="#" class="btn btn-default" role="button">
                            详细
                        </a>
                    </p>
                </div>
            </div>
        </div>

   </div>  
</div> -->
</body>
</html>

@endsection