<?php
include("dbconfig.php");
class tbUser extends mydb
{	
	var $user;
	var $pass;
	var $phone;
	var $email;
	
	
	function insert($conn,$user,$pass,$phone,$email)
	{
		$sql = "insert into tb_user(username,password,phone,email)
		 values('{$user}','{$pass}','{$phone}','{$email}')";
		if($conn->query($sql) == TRUE)
		{
			echo "<script>alert('注册成功！');window.location.href='../index.html';</script>";
		}
		else
		{
			echo "<script>alert('注册失败！');window.location.href='../index.html';</script>";
		}
	}
	
	function dlslt($conn,$user,$pass)
	{
		$sql = "select * from tb_user where username='$user' and password='$pass'";
		$result = mysqli_fetch_row($conn->query($sql));
		if(isset($result))
		{
			echo "<script>alert('登录成功！');window.location.href='../main.html';</script>";
		}
		else
		{
			echo "<script>alert('登录失败！');window.location.href='../index.html';</script>";
		}
	}
}
?>