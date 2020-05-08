$(function(){
	update();
});

function update()
{
	var $tr = "<tr><td>测试</td></tr>";
	
	$.ajax({
		url:"php/main.php",
		type:"POST",
		dataType:"text",
		success:function(data)
		{
			$("#tableContent").empty();
			$("#tableContent").append(data);
		},
		error:function(err)
		{
			console.log(err);
		}
	});
	window.setTimeout("update()",1500);
}