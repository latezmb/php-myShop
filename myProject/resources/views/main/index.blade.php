<!doctype html>
<html>
<head>
</head>
@include('model/header')
<body>
    <!-- Header Section End -->
	
	<!-- 图片轮播 Start -->
	<div id="demo" class="carousel slide" data-ride="carousel"><!-- (9)填写class属性，设置图片轮播-->
	 
	  <!-- 指示符 -->
	  <ul class="carousel-indicators"> <!-- (10)填写class属性，设置轮播指示符-->
	    <li data-target="#demo" data-slide-to="0" class="active"></li> <!-- (11)填写data-target属性-->
	    <li data-target="#demo" data-slide-to="1"></li>        <!-- (11)填写data-target属性-->
	    <li data-target="#demo" data-slide-to="2"></li>        <!-- (11)填写data-target属性-->
	  </ul>
	 
	  <!-- 轮播图片 -->
	  <div class="carousel-inner">      <!-- (12)填写class属性，设置轮播图片-->
	    <div class="carousel-item active">
	      <img src="{{asset('assets/images/banner/banner-1.jpg')}}"> <!-- (13)填写src属性，导入 assets/images/banner/ 目录下面的三张轮播图片-->
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('assets/images/banner/banner-2.jpg')}}"> <!-- (13)填写src属性，导入 assets/images/banner/ 目录下面的三张轮播图片-->
	    </div>
	    <div class="carousel-item">
	      <img src="{{asset('assets/images/banner/banner-3.jpg')}}"> <!-- (13)填写src属性，导入 assets/images/banner/ 目录下面的三张轮播图片-->
	    </div>
	  </div>
	 
	  <!-- 左右切换按钮 -->
	  <a class="carousel-control-prev" href="#demo" data-slide="prev"><!-- (14)填写class属性，左切换按钮-->
	    <span class="carousel-control-prev-icon"></span>
	  </a>
	  <a class="carousel-control-next" href="#demo" data-slide="next"><!-- (15)填写data-slide属性，右切换按钮-->
	    <span class="carousel-control-next-icon"></span>
	  </a>
	 
	</div>
	<!--图片轮播 End-->
	<br><br>
    
	<!-- Product Section Start -->
    <div class="product-section">
        <div class="container-fluid">        
            <div class="row">
                <div class="text-center">
                    <h1>商品推荐</h1>
                </div>
            </div>

            <div class="row">

               @if($data != null)
                         <!-- 数据库 -->
                    @foreach($data as $dt)
                        <div class="col-lg-3 col-sm-6 col-12">
                        <div class="product-item bg-white">
                                <div class="image-wrap">
                                    <a href="{{url('detailed')}}?id=<?= $dt->id?>" class="image">
                                        <img src="<?= asset($dt->img)?>" alt="">
                                    </a>
                                </div>
                                <div class="content text-center">
                                    <h4 class="title"><a href="{{url('detailed')}}?id=<?= $dt->id?>">{{$dt->goodsName}}</a></h4>
                                    <div class="price">
                                        <del class="price-old">￥{{$dt->oldPrice}}</del>
                                        <span class="price-sale">￥{{$dt->newPrice}}</span>
                                    </div>
                                </div>
                        </div>
                    </div>
                    @endforeach
                <!-- 数据库结束 -->
               @else
               <div clas="col-lg-3 col-sm-6 col-12">
                    <h2>暂无该搜索数据</h2>
               </div>
               @endif
            </div>
        </div>
    </div>
    <!-- Product Section End -->
    
    <footer class="">
    	
    </footer>   
</div>
</body>
</html>