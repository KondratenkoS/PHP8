<?php
	/*
		Сформируйте с помощью двух вложенных циклов следующий массив:

		[[1, 2], [3, 4], [5, 6], [7, 8]]

	*/
	$arr = [];
	$k = 1;
	for($i = 0; $i <= 3; $i++){
		for($j = 0; $j <= 1; $j++){
			$arr[$i][$j] = $k++;
		}
	}
	var_dump($arr);