<?php
include("model_user.php");
if(isset($_POST['username']))
{
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$tbuser = new tbUser();
	$conn = $tbuser->connectdb();
	$tbuser->insert($conn,$user,$pass,$phone,$email);
}
else if(isset($_POST['user']))
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$tbuser = new tbUser();
	$conn = $tbuser->connectdb();
	$tbuser->dlslt($conn,$user,$pass);
}
else
{ 
		header("location:../index.html");
}

?>