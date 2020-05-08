<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="{{asset('css/app.css')}}" rel="stylesheet">
</head>
<body>
    @if ($data->all())
		<table border="1" cellspacing="0" class="table">
			<tr>
				<td>学院</td>
				<td>班级</td>
				<td>课程</td>
				<td>人数</td>
			</tr>
			@foreach ($data as $dt)
				<tr>
					<td>{{$dt->dep_name}}</td>
					<td>{{$dt->class_name}}</td>
					<td>{{$dt->course}}</td>
					<td>{{$dt->class_count}}</td>
				</tr>
			@endforeach
		</table>
		{{$data->links()}}
    @endif
</body>
</html>