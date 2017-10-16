<?php  
	session_start();
	unset($_SESSION["name"]);
	#将所有的session内的东西全干掉;
	session_destroy();
?>