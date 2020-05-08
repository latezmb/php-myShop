<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>儿童服装店</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"> <!-- (1)填写href属性，导入Bootstrap CSS -->
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- jQuery JS -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <!-- Popper JS -->
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <!-- Bootstrap JS -->
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script><!-- (2)填写src属性，导入bootstrap.min.js -->
    
    <!--[if lt IE 9]>
    　　<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.js"></script>
    　　<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="site-wrapper container-fluid"><!-- (3)填写class属性，设置最外层容器为100%宽度 -->
	
    <!-- Header Section Start -->
	<header class="header-section section position-static">
		<nav class="navbar navbar-expand-md bg-light navbar-light "><!-- (4)填写class属性，设置响应式的导航栏 (屏幕宽度≧576px时水平铺开，屏幕宽度<576px时垂直堆叠) -->
			<a class="navbar-brand" href="{{url('main')}}">
				<img src="{{asset('assets/images/logo.png')}}" alt="clothes"><!-- (5)填写src属性，导入图片 assets/images目录下logo.png -->
			</a>				
			<!-- 设置汉堡按钮 -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse"><!-- (6)填写data-toggle和data-target属性，利用汉堡按钮控制折叠菜单的隐藏与显示 -->
			  <span class="navbar-toggler-icon"></span>
			</button>
			
			<!-- 设置折叠菜单 -->
			<div class="collapse navbar-collapse" id="navbarcollapse"><!-- (7)填写class属性，创建折叠导航栏-->
				<ul class="navbar-nav"><!-- (8)填写class属性，设置导航栏-->
					<li class="nav-item"><a class="nav-link active" href="{{url('main')}}">首页</a></li>
					<li class="nav-item"><a class="nav-link active" href="{{url('myShopping')}}">购物车</a></li>
					<li class="nav-item"><a class="nav-link active" href="{{url('order')}}">订单</a></li>
					<li class="nav-item"><a class="nav-link active" href="{{url('updateInfor')}}">个人信息</a></li>
				</ul>
				<span class="navbar-text text-warning">
					欢迎你！
				</span>
				<span class="navbar-text">
					@if(Session::has('userName'))
					<span class="text-primary">{{session('userName')}}</span>
					<a href="{{url('out')}}" class="navbar-text text-danger">退出登陆</a>
					@else
					<a href="{{url('login')}}" class="text-primary">游客，点击登陆</a>
					@endif
				</span>
			</div>
			<!-- 菜单 end -->
			  <form action="{{url('main')}}" method="post">
			    <div class="input-group mb-3 input-group-sm">
			      <input type="text" class="form-control" name="content">
			      {!!csrf_field()!!}
			      <div class="input-group-append ">
			        <input type="submit" class="input-group-text bg-warning" value="搜索">
			      </div>
			    </div>
  			</form>
		</nav>
	</header>
</body>
</html>