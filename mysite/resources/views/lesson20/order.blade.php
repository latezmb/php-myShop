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
			<td>订单号</td> 
			<td>支付方式</td>
			<td>费用名称</td>
			<td>金额</td>
			<td>交易时间</td>
			<td>患者姓名</td>
		</tr>
		@foreach ($data as $dt)
			<tr>
				<td>{{$dt->trans_no}}</td>
				<td>{{$dt->trans_type}}</td>
				<td>{{$dt->fee_name}}</td>
				<td>{{$dt->fee}}</td>
				<td>{{$dt->trans_time}}</td>
				<td>{{$dt->pname}}</td>
			</tr>
		@endforeach
	</table>
</body>
</html>