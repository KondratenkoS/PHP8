<?php
	/* #39
		Дан массивы:
		$arr1 = [1, 2, 3, 4, 5];
		$arr2 = [3, 4, 5, 6, 7];
		Запишите в новый массив элементы, которые не присутствуют в обоих массивах одновременно.
	*/
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$result = array_diff($arr1, $arr2);
	print_r($result);