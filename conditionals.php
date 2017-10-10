<?php 
	header('Content-Type:text/html;charset=utf-8');
	#分支
	#if & switch	
	/* > < >= <= != == !== === */
	#if

	$num = 2;
	if ($num <=4) {
		echo "num的值一定是小于等于4";
	}

	#if else
	if ($num >=4) {
		echo "true";
	}
	else{
		echo "false
		";
	}


	#nesting
	$num=4;
	if ($num >= 4) {
		if ($num <= 10) {
			echo "num一定在4~10之间";
		}
		else{
			echo "num一定大于10";
		}
	}
	else{
		echo "num一定在小于4";
	}

	#逻辑运算符
	/*
		逻辑与 && AND
		逻辑或 || OR
		逻辑异或 XOR
	*/

	$num = 3;
	if ($num <2 XOR $num < 10) {
		echo "num小于10并且大于3";
	}

	/*
		AND: 一假即假;
		OR :一真即真;
		XOR :有且只有一个为真结果才为真
	*/

	#场景还原
	$yue = "yw";
	if ($yue == "mlt") {
		echo "GUN";
	}
	else if ($yue == "tc12") {
		echo "GUN";
	}
	else if ($yue == "yw") {
		echo "ok";
	}
	else{
		echo "GUN";
	}


	#switch(条件大于四一般使用switch)
	$favColor = "green";
	switch ($favColor) {
		case 'red':
			echo "angry";
			break;
		case 'blue':
			echo "silence";
			break;
		case 'green':
			echo "forgive";
			break;
		case 'yellow':
			echo "happy";
			break;
		default:
			echo "GUN";
			break;
	}
	







?>

















