<?php  
	$users = ["name" => "Henry","email" => "hernry@qq.com","age" => 30];
	$users = serialize($users);
	setcookie("users",$users,time()+86400);
	#解析字符流
	$users = unserialize($_COOKIE["users"]);
	print_r($users);
?>