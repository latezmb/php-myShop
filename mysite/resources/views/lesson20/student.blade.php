<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}" />
</head>
<body>
	<a class="btn btn-primary text-white" href="{{url('ls20')}}">返回</a>
	<table class="table">
		<tr>
			<td>学号</td> 
			<td>姓名</td>
			<td>性别</td>
			<td>班级</td>
			<td>年级</td>
		</tr>
		@foreach ($data as $dt)
			<tr>
				<td>{{$dt->sno}}</td>
				<td>{{$dt->sname}}</td>
				<td>{{$dt->sex}}</td>
				<td>{{$dt->classname}}</td>
				<td>{{$dt->enteryear}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>