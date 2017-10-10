<?php 
	#array:数组 存储一堆数据的集合;
	/*
		下标数组: 下标以0开始;
		关联数组: 关联以第一个名字开头;
	*/

	#下标数组
	$people = array("Kevin","Henry","Hemiah");
	echo $people[1];
	// echo $people[3];//数组越界

	$ids = [23,56,42];
	echo $ids[2];

	$cars = ["Honda","Toyota","BYD"];
	$cars[3] = "BMW";
	echo $cars[3];
	echo count($cars);
	print_r($cars);
	#万能打印方法
	var_dump($cars);

	#关联数组
	$people1 = array("Herry"=>35,"Bukcy"=>25,"Emily"=>20);
	echo $people1["Emily"];

	$ids1 = [22=>"Herry",25=>"Bucky"];
	echo $ids1[22];
	$ids1[35] = "Emily";
	// echo $ids1[35];
	// print_r($ids1);;

	#观察
	$cars[] = "Bence";
	print_r($cars);
	$ids1[] = "Johon";
	print_r($ids1);

	$people1[] = 55;
	print_r($people1);


	#多维数组
	$cars2 = array(
		array("Honda",20,10),
		array("dz",20,20),
		array("Ford",15,10)
	);
	echo $cars2[2][1];
	$cars3 = [[1],[2],[3]];
	echo $cars3[1][0];
?>









