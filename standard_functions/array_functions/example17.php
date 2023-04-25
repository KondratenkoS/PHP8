<?php
	/* #17
		Дан массив:
		$arr1 = ['a', 'b', 'c'];
		$arr2 = [1, 2, 3];
		Создайте с их помощью следующий массив:
		['a' => 1, 'b' => 2, 'c' => 3]
	*/
	$arr1 = ['a', 'b', 'c'];
	$arr2 = [1, 2, 3];
	$result = array_combine($arr1, $arr2); 
	var_dump($result);