<?php
	/*
		С помощью двух вложенных циклов найдите сумму элементов этого массива.
	*/
	$arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
	$sum = 0;
	foreach($arr as $subelem){
		foreach($subelem as $elem){
			$sum += $elem;
		}
	}
	echo $sum;