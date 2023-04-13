<?php
	/*
		Найдите среднее арифметическое элементов массива.
	*/
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$count = count($arr);
	$sum = 0;
	foreach($arr as $elem){
		$sum += $elem;
	}
	echo $sum / $count . ' - это, среднее арифметическое.';