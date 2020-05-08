$(function(){
	$("#box .ipt").change(function(){
		$.ajax({
			url:"http://wthrcdn.etouch.cn/weather_mini?city="+$(".ipt").val()+"",
			type:"GET",
			async:true,
			dataType:"json",
			success:function(Data){
				console.log("请求成功！"+Data);
				$("#irp").attr("src","index.php?data="+JSON.stringify(Data.data));
			},
			error:function(err){
				console.log("请求失败");
				$("#irp").attr("src","index.php?city="+$(".ipt").val());
			}
		});
		
	});
});