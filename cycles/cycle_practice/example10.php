<?php
	/*
		Дан массив с числами. Найдите среднее арифметическое
		его элементов (сумма элементов, делить на количество).
	*/
	$arr = [1, 3, 54, 5, 12, 6, 8, 45];
	$sum = 0;
	$count = count($arr);
	foreach($arr as $elem){
		$sum += $elem;
	}
	echo $sum / $count;