<?php
	$user = $_POST["username"];
	$pass = $_POST["password"];
	$data = array(
		array(
			"username" => "xiaoji",
			"password" => "dashabi"
		),array(
			"username" => "gaoxueguang",
			"password" => "123456789"
		),array(
			"username" => "shihaoqi",
			"password" => "123456789"
		)
	);
	foreach ($data as $key => $value) {
		if ($user == $value["username"]) {
			# code...
			if ($pass == $value["password"]) {
				# code...
				$str = "0";
				break;
			}else{
				$str = "1";
				break;
			}
		}else{
			$str = "2";
		}
	}
	echo $str;
?>