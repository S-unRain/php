<?php  
	$loggedIn = true;
	$names = ["A","B","C"]
	// if ($loggedIn) {
	// 	echo "U r logged In";
	// }
	// else{
	// 	echo "U r NOT logged In";	
	// }
	// echo "<hr>";
	// #三目运算
	// echo ($loggedIn)? "U r logged In":"U r NOT logged In";	
	// echo "<hr>";
	// #简写得到 true 或者 false
	// $isRegistered = ($loggedIn == true)? true:false;
	// echo $isRegistered;

	// #三目嵌套
	// $age = 18;
	// $score = 80;
	// echo "You scroe is ".($score > 70 ?($age < 20 ? "优秀" : "一般"):($age < 20 ? "一般" : "差等"));
?>

<!-- html + php 嵌套语法 -->
<div>
	<?php if ($loggedIn) { ?>
		<p>Welcome beijing</p>
	<?php }else{ ?>
		<p>Welcome zhengzhou</p>
	<?php } ?>
</div>
<!-- 优化 -->

<div>
	<?php if ($loggedIn) : ?>
		<p>Welcome beijing</p>
	<?php else: ?>
		<p>Welcome zhengzhou</p>
	<?php endif; ?>
</div>


<!-- 遍历数组 foreach -->

<div>
	<?php foreach($names as $val): ?>
		<?php echo $val; ?>
	<?php endforeach; ?>
</div>


<!-- 遍历数组 for -->

<div>
	<?php for($i = 0;$i < $names.length;$i++): ?>
		<?php echo $names[$i]; ?>
	<?php endfor; ?>
</div>






