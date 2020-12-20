<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<link rel="stylesheet" href="{{asset('')}}/css/bootstrap3.css" type="text/css" >
		    <script src="{{asset('')}}/js/jquery.js"></script>
		    <script src="{{asset('')}}/js/bootstrap.js"></script>
		<title></title>
	</head>
	<style>
		#th1{
			text-align: center;
			width:90%;
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
                    <li><a href="{{url('child')}}">华为</a></li>
                    <li><a href="{{url('child2')}}">小米</a></li>
                    <li><a href="{{url('child3')}}">苹果</a></li>
                    <li class="disabled"><a href="#">OPPO</a></li>
                    <li class="disabled"><a href="#">VIVO</a></li> 
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle= "dropdown">
                            科技公司 <b class="caret"></b>
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
          </body>
</html>	
