<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<table border="1" cellspacing="0">
		<tr>
			<td>学号</td>
			<td>科目</td>
			<td>成绩</td>
		</tr>
		@foreach ($data as $value)
		<tr>
			<td>{{$value->xh}}</td>
			<td>{{$value->km}}</td>
			<td>{{$value->cj}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>