<?php
	/*
		Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.
	*/
	$arr = [1, 3, 54, 5, 12, 6, 8, 45];
	$sum = 0;
	foreach($arr as $elem){
		$sum += $elem;
	}
	echo $sum;