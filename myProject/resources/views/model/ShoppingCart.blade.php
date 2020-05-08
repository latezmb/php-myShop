<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<link rel="stylesheet" type="text/css" href="{{asset('css/Shoppong.css')}}">
</head>
@include('model/header')
<script type="text/javascript">

</script>
<body>
	<div class="container ">
		<div class="container">
    		<div class="row alert alert-secondary">
    			<div class="col-3 text-center">
    				<span>宝贝购物车</span>
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
    				<span>操作</span>
    			</div>
    		</div>
    	</div>
		

		@if(!$data->isEmpty())
		   @foreach($data as $dt)
		      <div class="container">
				<div  class="row">
					<div class="col-12">
						  <div class="alert alert-secondary">
						     	商品名称：{{$dt->goodsName}}
						  </div>
					</div>
					<div id="div1" class="col-3 text-center">
						<img src="<?= asset($dt->goodsImg)?>">
					</div>
					<div class="col-2 text-center test">
						<input class="btn-primary" name="jian" type="button" value="-">
						<input id="value" type="text" style="width: 20px;" value="<?= $dt->sum?>">
						<input class="btn-primary" type="button" value="+" name="jia">
					</div>
					
					<div class="col-2 text-center">
						<span class="text-success">￥{{$dt->money}}</span>
					</div>
					<div class="col-2 text-center">
						<span class="zhong">{{$dt->size}}</span>
					</div>
					<div class="col-3 text-center">
						<a href="{{url('delShopAddorder')}}?id={{$dt->id}}"><input type="button" class="btn-danger" value="购买"></a>
					</div>
				</div>
				<hr>
			</div>
		   @endforeach
		@else
		  <h2>购物车空空如也！</h2>
		@endif
	</div>
</body>
</html>