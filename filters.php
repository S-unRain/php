<div class="container">
	<?php 
		//检查是否存在data的name属性
	/*
	if (filter_has_var(INPUT_POST,"data")) {
			#echo "data 存在";
			$email = $_POST["data"];
			#echo $email;
			#过滤掉不合法的内容
			$email = filter_var($email,FILTER_SANITIZE_EMAIL);
			echo $email;
			#验证是否是有效的邮箱
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				echo "邮箱合法";
			}else{
				echo "邮箱不合法";
			}
		}else{
			echo "data 不存在";
		}
		*/


		/*
		审核
		FILTER_SANITIZE_EMAIL
		FILTER_SANITIZE_ENCODED
		FILTER_SANITIZE_MAGIC_QUOTES
		FILTER_SANITIZE_NUMBER_FLOAT
		FILTER_SANITIZE_NUMBER_INT
		FILTER_SANITIZE_SPECIAL_CHARS
		FILTER_SANITIZE_FULL_SPECIAL_CHARS
		FILTER_SANITIZE_STRING
		FILTER_SANITIZE_STRIPPED
		FILTER_SANITIZE_URL
		FILTER_UNSAFE_RAW
		验证
		FILTER_VALIDATE_BOOLEAN
		FILTER_VALIDATE_EMAIL
		FILTER_VALIDATE_FLOAT
		FILTER_VALIDATE_INT
		FILTER_VALIDATE_IP
		FILTER_VALIDATE_MAC
		FILTER_VALIDATE_REGEXP
		FILTER_VALIDATE_URL
	*/
		#验证一个变量的值,是否是合法的整型
/*
		$var = "23";
		if (filter_var($var,FILTER_VALIDATE_INT)) {
			echo "合法";
		}else{
			echo "不合法";
		}

		#获取字符串中所有的数值
		$var = "qweasdj231.11dfd2134";
		$var1 = filter_var($var,FILTER_SANITIZE_NUMBER_INT);
			echo $var1;
	

		#特殊字符

		$var = "<script>alert(1)</script>";
		// echo $var;
		echo filter_var($var,FILTER_SANITIZE_SPECIAL_CHARS);


		#验证数组中每个元素
		$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" =>1,
					"max_range" =>150
				)
			)
		);
		print_r(filter_input_array(INPUT_POST,$filters));*/

		#form表单中input的内容,第一个input一定是email,第二个一定是数值,并且不能小于1,大于150;

		/*if (filter_has_var(INPUT_POST,"data")) {
			$email = $_POST["data"];
			if (filter_var($email,FILTER_VALIDATE_EMAIL)) {
				echo "邮箱合法";
			}else{
				echo "邮箱不合法";
			}
			echo "<hr>";
		}
		if (filter_has_var(INPUT_POST,"data2")) {
			$num = $_POST["data2"];
			echo $num;
			if ($num < 1 || $num > 150) {
				echo "错误";	
			}
			else {
				echo "正确";
			}
		}*/
		$arr = array(
			"name" => "henry",
			"age" => "30",
			"email" => "123@gmail.com"
		);
		$filters = array(
			"name" => array(
				"filter" => FILTER_CALLBACK,
				"options" => "ucwords",
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" =>1,
					"max_range" =>150
				),
			),
			"email" =>FILTER_VALIDATE_EMAIL,

		);
		print_r(filter_var_array($arr,$filters));
	 ?>	

</div>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Filters /过滤器</title>
	<link rel="stylesheet" type="text/css" href="https://bootswatch.com/cosmo/bootstrap.min.css">
</head>
<body>
	<br>
	<div class="container">
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<input type="text" name="data" class="form-control"><br>
			<input type="text" name="data2" class="form-control"><br>
			<button type="submit" class="btn btn-primary btn-block">提交</button>
		</form>
	</div>
</body>
</html>