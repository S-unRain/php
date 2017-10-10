<?php 
	echo "Hello World!";

	//单行注释 快捷键:command+/;
	//单行注释 快捷键:shift+3;
	/*
		多行注释 快捷键:command+alt+/;
	 */
	
	#variable 变量
	$output = "hello world!";
	echo $output;
	/*
		-前缀$
		-以数字/字母/下划线组成
		-大小写敏感
		-数字不能开头
		-驼峰命名法
	 */
	#数据类型
	/*
		string Integer Float boolean Array Object Resource(函数)
	 */
	// $num = 22;
	// $float = 22.22;
	// $bool = true;//(打印结果为1)
	// $bool = false;//(打印结果为空)
	// echo $bool
	#运算符
	$num1=10;
	$num2=20;
	$sum=$num1+$num2;
	echo $sum;
	#字符串拼接
	$string1="hellow";
	$string2="world";
	// $greeting=$string1+$string2;
	// echo $greeting;
	#在php中加好就是茄海鸥,并没有拼接作用;
	$greeting=$string1.$string2;
	echo $greeting;
	//,可以打印多个变量;
	echo $string1,$string2;
	#php中引号的区别
	#单引号内是单纯的字符串
	$greeting2='$string1 $string2';
	echo $greeting2;
	#双引号中的变量可以正常被解析
	$greeting3="$string1 $string2";
	echo $greeting3;

	#转义字符
	$string3='They\'re here';
	$string4="They're here";
	echo $string3;
	echo $string4.'<br>';
	printf($string4);

	echo '<hr>';
	#常量
	define("GREETING", "WhatEver!");
	define("GREETING", "WhatEver!",true);//常量第三个为bool ,true 代表部分大小写!
	echo GREETING;
	// echo greeting;
	var_dump(greeting);
 ?>











