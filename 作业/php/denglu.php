<?php
	$user = $_GET['username'];
	$password = $_GET["password"];
	$username = "gxggxg";
	$pass = "123456";
	if ($user == $username && $pass == $password) {
		# code...
		echo "登录成功";
	}else{
		echo "登录失败";
	}
?>