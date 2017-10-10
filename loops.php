<?php 
	# loops: 循环 - 让项目更高效;
	# 根据某个条件重复执行某段代码;
	/*
		-For
		-While
		-Do While
		-Foreach
	*/

	# For循环
	#@params - init,condition,inc
	for ($i=0; $i < 10; $i++) { 
		echo ($i+1)."<br>";
	}

	# While
	#condition 判断条件;
	$i =0;
	while ($i < 10 ) {
		echo $i."<br>";
		$i++;
	}

	# Do While 
	#@params,condition
	$i = 0;
	do{
		echo $i."<br>";
		$i++;
	}
	while ($i < 10);

	#Foreach循环
	$people = array("Herry","Bucky","Emily");
	foreach ($people as $person) {
		echo $person;
		echo "<br>";
	}

	#foreach 循环 关联数组

	$people1 = array(
		"Herry"=>"Herry@gmail.com",
		"Bucky"=>"Bucky@gmail.com",
		"HEmily"=>"Emily@gmail.com",
	);
	foreach ($people1 as $person => $email) {
		echo $person." : ".$email;
		echo "<br>";
	}
	/*	
		练习一
		打印1-100之间7的倍数
		打印1-100之间个位为7的数
		打印1-100之间十位为7的数
		打印1-100之间个位不为7,十位不为7,以及不是7的倍数	

		练习二
		打印九九乘法表

	*/

?>








