<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<h1>{{$title}}</h1>
<table border="1" cellspacing="0">
	<tr>
		<td>学号</td>
		<td>科目</td>
		<td>成绩</td>
	</tr>
	@foreach ($da as $a)
		<tr>
			<td>{{$a->xh}}</td>
			<td>{{$a->km}}</td>
			<td>{{$a->cj}}</td>
		</tr>
	@endforeach
</table>
</body>
</html>