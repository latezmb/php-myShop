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
@if($errors->any())
    <ul>
         @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
         @endforeach
    </ul>
@endif
 

    @if(session()->has('msg'))
        {{session()->get('msg')}}
    @endif

    <form action='{{url("testb/insertdo")}}' method="post">
    	{!!csrf_field()!!}
    	学号：<select name="xh">
    			@foreach ($data as $dt)
					<option>{{$dt->xh}}</option>
    			@endforeach
    		 </select>
    		 <br/>
    	科目：<select name="km">
    			@foreach ($data as $dt)
					<option>{{$dt->km}}</option>
    			@endforeach
    		 </select>
    		 <br/>
    	成绩:<input type="text" name="cj"/>
    	<br/>
    	<input type="submit" value="添加成绩" />
    </form>
</body>
</html>