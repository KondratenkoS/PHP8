<?php
	/*
		Найдите сумму элементов этого массива и выведите ее на экран.
	*/
	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	$sum = 0;
	foreach($arr as $elem){
		$sum += $elem;
	}
	echo $sum;