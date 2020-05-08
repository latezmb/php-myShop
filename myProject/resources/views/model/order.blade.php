<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<style>
#div1 img{
	width:200px;
	height:100px;
}
</style>
</head>
@include('model/header')
<body>
	<hr>
	<div class="container">
		<div class="row alert alert-secondary">
			<div class="col-3 text-center">
				<span>宝贝订单</span>
			</div>
			<div class="col-2 text-center">
				<span>数量</span>
			</div>
			<div class="col-2 text-center">
				<span>价格</span>
			</div>
			<div class="col-2 text-center">
				<span>尺寸</span>
			</div>
			<div class="col-3 text-center">
				<span>宝贝状态</span>
			</div>
		</div>
	</div>

	@if(!$data->isEmpty())
		@foreach($data as $dt)
			<div class="container">
				<div class="row">
					<div class="col-12">
						  <div class="alert alert-secondary">
						     	商品名称：{{$dt->goodsName}}
						  </div>
					</div>
					<div id="div1" class="col-3 text-center">
						<img src="<?= asset($dt->goodsImg)?>">
					</div>
					<div class="col-2 text-center">
						<span class="text-primary">{{$dt->sum}}</span>
					</div>
					
					<div class="col-2 text-center">
						<span class="text-success">￥{{$dt->money}}</span>
					</div>
					<div class="col-2 text-center">
						<span class="">{{$dt->size}}</span>
					</div>
					<div class="col-3 text-center">
						<span class="text-danger">{{$dt->state}}</span>
					</div>
				</div>
				<hr>
			</div>
		@endforeach
	@else
		<h2>暂无订单</h2>
	@endif

</body>
</html>