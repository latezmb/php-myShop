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
    @if(!empty($data))
		<table border="1" cellspacing="0">
			<tr>
				<td colspan="4" style="text-align: center;">学生成绩表</td>
			</tr>
			<tr>
				<td>学号</td>
				<td>科目</td>
				<td>成绩</td>
				<td>编辑</td>
			</tr>
			@foreach ($data as $dt)
				<tr>
					<td>{{$dt->xh}}</td>
					<td>{{$dt->km}}</td>
					<td>{{$dt->cj}}</td>
					<td><a href="{{url('testb').'/update/'.$dt->id}}">修改</a></td>
				</tr>
			@endforeach
		</table>
		<a href="{{url('testb/insert')}}"><button>添加</button></a>
    @else
    	没有数据
    @endif
</body>
</html>