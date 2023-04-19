<?php
	/*
		Найдите сумму всех элементов массивa.
	*/
	$arr = [[1, 2], [3, 4], [5, 6]];
	$sum = array_sum($arr[0]) + array_sum($arr[1]) + array_sum($arr[2]);
	echo $sum;