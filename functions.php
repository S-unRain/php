<?php  
	#function 函数 - 具有某一功能的代码块;
	/*
		Camel Case - myFunction();
		Lower Case - my_function();
		pascal Case - MyFunction();
	*/
	// 定义函数
	//php中函数名不区分大小写
	//函数没有被调用时未占内存
	//函数都有返回值,没有return输出underfined;
	function simpleFunction(){
		echo "hello world";
	}
	//调用函数
	// simpleFunction();
	SIMPLEFUNCTION();
	echo "<br>";
	# 有参数 无返回值
	function buy($money="20块钱"){
		echo $money."咖喱给给";
	}
	buy("30块钱");
	//php有参数不可以不传参
	echo "<br>";
	#多参数 有返回值;
	function sumValue($num1,$num2){
		$sum=$num1+$num2;
		return $sum;
	}
	echo sumValue(1,3);


	#无参数,有返回值
	function buyDrink(){
		return "饭后的饮料";
	}

	echo buyDrink();

	#函数传引用
	$myNum = 10;
	function addFive($num){
		return $num += 5;
	}
	addFive($myNum);
	echo $myNum ;//15 拿到了myNum的引用,改变了内存中的数值,所以是15
?>







