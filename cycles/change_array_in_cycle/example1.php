<?php
	/*
		Дан массив с числами. Переберите этот массив циклом
		и возведите каждый элемент этого массива в квадрат.
	*/
	$arr = [2, 5, 7, 9, 18];
	$count = count($arr);
	for($i = 0; $i < $count; $i++){
		$arr[$i] = $arr[$i] * $arr[$i];
	}
	var_dump($arr);