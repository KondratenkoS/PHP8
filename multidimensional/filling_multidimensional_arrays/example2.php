<?php
	/*
		Сформируйте с помощью двух вложенных циклов следующий массив:

		[['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x'], ['x', 'x', 'x', 'x']]
	*/
	$arr = [];
	for($i = 0; $i <= 2; $i++){
		for($j = 0; $j <= 3; $j++){
			$arr[$i][$j] = 'x';
		}
	}
	var_dump($arr);