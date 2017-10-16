<?php  
	header("Content-Type:text/html,charset=UTF-8");
	#监听用户是否触发submit方法
	if (isset($_POST["submit"])) {
		$username = $_POST["username"];
		setcookie("username",$username,time() + 86400*30);

		header("location: page2.php");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Page 1</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
		<input type="text" name="username" placeholder="enter user name">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>