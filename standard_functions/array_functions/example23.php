<?php
	/* #23
		Дан массив:
		$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
		Попробуйте на нем различные типы сортировок.
	*/
	$arr = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
	sort($arr);
	var_dump($arr);
	echo '<br><br>';
	
	rsort($arr);
	var_dump($arr);
	echo '<br><br>';
	
	asort($arr);
	var_dump($arr);
	echo '<br><br>';
	
	arsort($arr);
	var_dump($arr);
	echo '<br><br>';
	
	ksort($arr);
	var_dump($arr);
	echo '<br><br>';
	
	krsort($arr);
	var_dump($arr);
	echo '<br><br>';
	