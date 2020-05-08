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
		<form action="{{url('testb/updatedo')}}" method="post" />
			学号：<input type="text" disabled="disabled" name="xh" value='{{$data->xh}}'>
			<br/>
			科目：<input type="text" disabled="disablaed" name="km" value='{{$data->km}}'>
			<br/>
			成绩：<input type="text" name="cj" value='{{$data->cj}}'>
			<br/>
			<input type="hidden" name="id" value='{{$data->id}}'>
			{!!csrf_field()!!}
			<input type="submit" value="修改" />
		</form>
    @else
    	没有数据
    @endif
</body>
</html>