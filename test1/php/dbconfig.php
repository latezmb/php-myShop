<?php
header("Content-type:text/html");
class mydb
{
	function connectdb()
	{
		$host = "localhost:33061";
		$username = "root";
		$password = "";
		$dbname = "mytest";
		$conn = new mysqli($host,$username,$password,$dbname);
		if($conn->connect_error){
			die("连接失败！".$conn->connect_error);
		}
		return $conn;
	}
}
?>