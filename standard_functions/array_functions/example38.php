<?php
	/* #38
		Дан массивы:
		$arr1 = [1, 2, 3, 4, 5];
		$arr2 = [3, 4, 5, 6, 7];
		Запишите в новый массив элементы, которые есть и в том, и в другом массиве.
	*/
	$arr1 = [1, 2, 3, 4, 5];
	$arr2 = [3, 4, 5, 6, 7];
	$result = array_intersect($arr1, $arr2);
	print_r($result);