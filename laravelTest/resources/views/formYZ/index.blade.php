<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
</head>
<body>
	@if ($errors->any())
		<div>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif
	@if(session()->has('msg'))
		<div>{{session()->get('msg')}}</div>
	@endif
    <form action="{{url('zhuce/signup')}}" method="post">
    	{!!csrf_field()!!}
    	用户名：
    	<input type="text" name="userName" value="{{old('userName')}}"/>
    	<br/>
    	邮&nbsp;&nbsp;&nbsp;箱：
    	<input type="text" name="email" value="{{old('email')}}"/>
    	<br/>
    	密&nbsp;&nbsp;&nbsp;码：
    	<input type="password" name="password" value="{{old('password')}}"/>
    	<br/>
    	确认密码:
    	<input type="password" name="zpassword" value="{{old('zpassword')}}"/>
    	<br/>
    	<input type="submit" value="注册" />
    </form>
</body>
</html>