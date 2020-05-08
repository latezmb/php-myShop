<?php
	if(isset($_GET['data']))
	{
		$data = $_GET['data'];
		$obj = json_decode($data);	
	}
	else
	{
		$city = $_GET['city'];
		$data = file_get_contents("compress.zlib://"."http://wthrcdn.etouch.cn/weather_mini?city={$city}");
		$obj = json_decode($data)->data;
	}
	
?>
<! !DOCTYPE html>
<html>
	<head>
		<style>
			h2{
				width: 100%;
				border: 1px solid #ccc;
				box-shadow:2px 2px 2px 2px #ccc;
				text-align:center;
			}
			.yesterday{
				border: 1px solid black;
				width:25%;
				padding:10px;
				border-radius:20px;
				text-align:center;
				display:inline-block;
				margin:10px;
			}
		</style>
		<meta charset="utf-8" />
	</head>
	<body>
		<h2><?= $obj->city?>&nbsp;&nbsp;&nbsp;<?= $obj->wendu ?></h2>
        <h3></h3>
        <div class="yesterday">
			昨天：<span><?php echo $obj->yesterday->date ?></span>
			<p><?php echo $obj->yesterday->fl ?></p>
			<p><?php echo $obj->yesterday->fx ?></p>
			<p><?php echo $obj->yesterday->high ?></p>
			<p><?php echo $obj->yesterday->low ?></p>
			<p><?php echo $obj->yesterday->type ?></p>
        </div>
		<?php for($i=0;$i<count($obj->forecast);$i++){ ?>
		<div class="yesterday">
			<span><?php echo $obj->forecast[$i]->date ?></span>
			<p><?php echo $obj->forecast[$i]->fengli ?></p>
			<p><?php echo $obj->forecast[$i]->fengxiang ?></p>
			<p><?php echo $obj->forecast[$i]->high ?></p>
			<p><?php echo $obj->forecast[$i]->low ?></p>
			<p><?php echo $obj->forecast[$i]->type ?></p>
		</div>
		<?php } ?>
	</body>
</html>
