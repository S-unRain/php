<?php  
	// echo date(); 至少要给一个参数;
	echo date("d");#day
	echo date("m");#month
	echo date("Y");#year(2017)
	echo date("y");#year(17)
	echo date("l");#day of week;
	echo date("Y/m/d");#年月日
	echo date("d-m-Y");#日月年

	# 时分秒
	echo date("h");#hour
	echo date("i");#minute
	echo date("s");#seconds
	echo date("a");#AM or PM

	#设置时区
	date_default_timezone_set("Asia/Shanghai");
	echo date("h:i:s");

	#mktime
	echo "<hr>";
	$timestamp = mktime(07,00,12,1,24,1988);
	echo $timestamp;
	echo "<hr>";

	#完整的时间

	echo date("m/d/Y h:i:s a",$timestamp);
	echo "<hr>";
	#字符串转时间
	$timestamp2 = strtotime("7:00pm March 22 2016");
	echo $timestamp2;
	echo "<hr>";
	$timestamp3 = strtotime("tomorrow");
	$timestamp4 = strtotime("next sunday");
	$timestamp5 = strtotime("+2 Days");
	echo date("m/d/Y h:i:s a",$timestamp3);
	echo "<hr>";
	echo date("m/d/Y h:i:s a",$timestamp4);
	echo "<hr>";
	echo date("m/d/Y h:i:s a",$timestamp5);
?>