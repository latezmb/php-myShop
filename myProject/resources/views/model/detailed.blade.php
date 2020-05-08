<!DOCTYPE html>
<html>
@include('model/header')
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Examples</title>
<meta name="description" content="">
<meta name="keywords" content="">
<link href="" rel="stylesheet">
<style type="text/css">
	#div2 img{
		width:30px;
		height: 30px;
		margin-left: 20px;
	}
	.alpha{
		opacity: 0.4;
		filter: alpha(opacity=40);
	}
	#row{
		width:60%;
	}
</style>

<script type="text/javascript">
	$(function(){
		$('#div2 img').addClass('alpha');
		$('#div2 img:first').removeClass('alpha');
		//添加鼠标相应事件
		$('#div2 img').mouseover(function(){
			var src = $(this).attr('src');
			$('#div1>img').attr('src',src);
			$(this).removeClass('alpha').siblings().addClass('alpha');
		});

		$("#jian").click(jian);
		$("#add").click(add);
	});

	function jian()
	{
		var number = Number($("#number").val());
		if(number>1)
		{
			number -= 1;
		}
		$("#number").val(number);
	}
	function add()
	{
		var number = Number($("#number").val());
		number += 1;
		$("#number").val(number);
	}
</script>
</head>
<body>
	<!-- 商品展示 -->
	<br><hr>
    <div  class="container">
    	<div class="row" id="row">
    		<div class="col-6" id="div1">
    			<img src="<?= asset($data->img);?>"/>
    			<hr>
		    	<div id="div2">
		    		<img src="<?= asset($data->img);?>"/>
		    		<img src="{{asset('img/product-18.png')}}"/>
		    		<img src="<?= asset($data->img);?>"/>
		    		<img src="{{asset('img/product-18.png')}}"/>
		    	</div>
    		</div>
    		<div class="col-6">
    			<div class="container">
    				<div class="row">
    					商品名称：<?= $data->goodsName?>
    				</div>
    				<br>
    				<div class="row bg-warning">
    					<span class="price-sale">原价：</span>
    					<del class="price-old">￥{{$data->oldPrice}}</del>
    					&nbsp;&nbsp;&nbsp;
    					<span class="price-sale">现价：</span>
                        <span class="price-sale">￥{{$data->newPrice}}</span>
    				</div>
    				<br>

    				<div class="row">
    					<form action="{{url('addorder')}}" method="post">
    					<input type="hidden" name="goodsImg" value="<?= $data->img;?>" />
    					<input type="hidden" name="money" value="<?= $data->newPrice;?>" />
    					<input type="hidden" name="goodsName" value="<?= $data->goodsName;?>" />
    					钱
    					名
    					{!!csrf_field()!!}
	    					<span>尺寸：</span>
	    					<div class="input-group mb-3">
							  	<div class="input-group-prepend">
								    <div class="input-group-text">
								      <input type="radio" name="size" value="S" checked> 
								       <span class="input-text">&nbsp;&nbsp;S&nbsp;&nbsp;</span>
								    </div>
							  	</div>
							  	<div class="input-group-prepend">
								    <div class="input-group-text">
								      <input type="radio" name="size" value="M"> 
								       <span class="input-text">&nbsp;&nbsp;M&nbsp;&nbsp;</span>
								    </div>
							  	</div>
							  	<div class="input-group-prepend">
								    <div class="input-group-text">
								      <input type="radio" name="size" value="L"> 
								       <span class="input-text">&nbsp;&nbsp;L&nbsp;&nbsp;</span>
								    </div>
							  	</div>
							</div>
    						<input type="button" value="-" id="jian" class="btn-primary">
	    					<input type="text" id="number" name="sum"  value="1" style="width:30px;" />
	    					<input type="button" value="+" id="add" class="btn-primary">
	    					&nbsp;&nbsp;
	    					<br>
	    					<hr>
	    					<input type="submit" class="btn-info" name="add" value="加入购物车" >
	    					<input type="submit" class="btn-danger" name="Buy" value="立即购买" >
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- 商品展示END -->
    <hr>
    <!-- 评论区 -->
    	<div class="container">
    		<br>
    		<!-- 卡片头部 -->
    		<ul class="nav nav-tabs" role="tablist">
    			<li class="nav-item">
    				<a class="nav-link active" data-toggle="tab" href="#comment">评论</a>
    			</li>
    			<li class="nav-item">
    				<a class="nav-link" data-toggle="tab" href="#myComment">我要评论</a>
    			</li>
    		</ul>
    		<!-- 卡片头部  END-->
    		
    		<!-- 卡片内容 -->
    		<div class="tab-content">
    			<div id="comment" class="container tab-pane active">
    				<table class="table table-striped">
    				<hr>
    					@if(!$comment->isEmpty())
    						@foreach ($comment as $comt)
    							<tr>
    								<td style="width:15%;">{{$comt->username}}</td>
    								<td>{{$comt->content}}</td>
    							</tr>
    						@endforeach
    					@else
    					
    					<h3>暂无评论</h3>
    					@endif
    				</table>
    			</div>
    			    		
	    		<div id="myComment" class="container tab-pane">
	    			<form action="{{url('addComment')}}" method="post">
	    				{!!csrf_field()!!}
	    				<input type="hidden" name="goodsId" value="{{$data->id}}">
	    				<input type="hidden" name="username" value="<?= session('userName')?>">
	    				<br/>
	    				<span class="font-weight-bold">输入你的评论</span>
	    				<textarea rows="4" cols="10" class="form-control" name="content"></textarea>
	    				<br/>
	    				<input class="btn-primary" type="submit" value="提交">
	    			</form>
	    		</div>
    		</div>

    		<!-- 卡片内容 END  -->
    	</div>
    <!-- 评论区 end-->
</body>
</html>