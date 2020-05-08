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
			<td>科目</td>
			<td>成绩</td>
		</tr>
		@foreach ($data as $dt)
			<tr>
				<td>{{$dt->xh}}</td>
				<td>{{$dt->km}}</td>
				<td>{{$dt->cj}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>