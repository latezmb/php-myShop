<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
	<form action='{{url("testa/select")}}' method="post">
	   {!!csrf_field()!!}
		输入查询学号：<input type="text" name="studetId" value='{{$xh}}'>
		<input type="submit" value="查询">
	</form>
	<hr/>
	@if(!empty($data))
	   @if(!$data->isEmpty())
	       <table border="1" cellspacing="0">
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
	   @else
	       查无此人
	   @endif
	@endif
</body>
</html>