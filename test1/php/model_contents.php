<?php
include("dbconfig.php");
class tbContent extends mydb
{
	function insert($conn,$content)
	{
		$sql = "insert into tb_content(contents) values('$content')";
		if($conn->query($sql) == TRUE)
		{
			echo "<script>alert('发送成功');window.location.href='../main.html';</script>";
		}
		else
		{
			echo "<script>alert('发送失败');window.location.href='../main.html';</script>";
		}
	}
}

?>