<?php
	/*
		Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5.
	*/
	$arr = [10, 20, 30, 50, 235, 3000];
	foreach($arr as $elem){
		$str = (string)$elem;
		if($str[0] == 1 or $str[0] == 2 or $str[0] == 5){
			echo $elem . '<br>';
		}
	}