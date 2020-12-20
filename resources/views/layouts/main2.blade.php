<html>
	<head>
		<!--这里是一个单行占位-->
		<title>应用程序名称-@yield('title')</title>
		<link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css" >
		    <script src="{{asset('')}}/js/jquery.js"></script>
		    <script src="{{asset('')}}/js/bootstrap.js"></script>
	</head>
	<style>
		h3{
			text-align: center;
		}
	</style>
	<body>
		<nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand active" href="{{url('/')}}">首页</a>
                <!-- 设置汉堡菜单，<span class="icon-bar"></span> 表示一条线，三个表示三条线 -->
                <button type="button" class="navbar-toggle" data-toggle= "collapse" data-target="#navbarcollapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- 设置折叠菜单 -->
            <div class="collapse navbar-collapse" id="navbarcollapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('child')}}">	华为</a></li>
                    <li><a href="{{url('child2')}}">小米</a></li>
                    <li><a href="{{url('child3')}}">苹果</a></li>
                    <li class="disabled"><a href="#">OPPO</a></li>
                    <li class="disabled"><a href="#">VIVO</a></li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle= "dropdown">
                              科技公司<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">资讯</a></li>
                            <li><a href="#">网站导航</a></li>
                            <li class="divider"></li>
                            <li><a href="#">关于</a></li>
                        </ul>
                    </li>
                    <form class="navbar-form form-inline navbar-right">
                    <div class="form-group">
                       
                        <input type="text" name="" id="search" value="" placeholder="请输入要搜索的内容" class="form-control"/>
                    </div>
                    <button class="btn btn-info">搜索</button>
                </form>         
                </ul>
            </div>
        </nav>
		<!-- <h1 align="center">科技公司
				<!-- <div style="text-align: left;"> 相关链接<br>
					<a href="{{url('child')}}">华为</a><br>
					<a href="{{url('child2')}}">小米</a><br>
					<a href="{{url('child3')}}">苹果</a>
				</div> -->
		</h1>
		<h1 align="center" style="margin-top:10px;background: linear-gradient(to bottom,white,black);/* 背景从上到下颜色渐变 */
	width:100%;
	height:50px;
	color: red;
} ">公司简介</h1>
		
		<div class="container">@yield('content')</div>
					
		<div style="text-align:center;">赵攀渝版权所有,未经书面授权禁止使用
Copyright © 2020  </div>
	</body>
</html>