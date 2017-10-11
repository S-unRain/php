<?php  
	# string functin: 处理字符串的函数
	# 返回字符串的一部分 substr
	$output = "HelloWorld";
	// $output = substr($output,1);
	// $output = substr($output,1,5);
	// echo $output;
	# 返回给定的字符串 string 的长度  strlen
	// echo strlen($output);
	# 查找字符串首次出现的位置 strpos
	// $output = strpos($output,"lo");
	// echo $output;
	
	# 计算指定字符串在目标字符串中最后一次出现的位置 strrpos
	// $output = strrpos($output,"l");
	// echo $output;
	# 去除首尾空格trim
	$output = "   helloworld    ";
	echo strlen($output);
	echo trim($output);

	
	# 将字符串转为大写 strtoupper
	$str1 = "hello world";
	echo strtoupper($str1);
	
	# 将字符串转为小写 strtolower
	$str = "HELLOWORLD";
	echo strtolower($str);
	
	# 将每个单词首字母大写 ucwords
	echo ucwords($str1);
	
	# 替换所有匹配的内容  str_replace
	$text = "Hello World";
	$output = str_replace("World","Everybody","$text");
	echo $output;
	
	# 判断是否是字符串  is_string
	$val = "22"; 
	$output = is_string($val);
	echo $output;
	echo "<br>";
	# 过滤掉数组中非字符串的值
	$values = array(true,false,"hello",32,"23",23.4,"32.4",""," ",0,"0");
	foreach ($values as $value) {
		#判断Value是否是字符串,如果是输出
		if (is_string($value)) {
			echo $value." is a string!<br>";
		}
	}
	# 压缩字符串  gzcompress
	$string = "氨基酸电脑看";
	$compressed = gzcompress($string);
	echo $compressed;
	# 解压字符串 
	$unCompressed = gzuncompress($compressed);
	echo $unCompressed;
?>