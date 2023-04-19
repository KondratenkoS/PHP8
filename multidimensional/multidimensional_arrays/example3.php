<?php
	/*
		Найдите сумму всех элементов приведенного массива.
	*/
	$arr = [
		[
			[1, 2],
			[3, 4],
		],
		[
			[5, 6],
			[7, 8],
		],
	];
	$sum = array_sum($arr[0][0]) + array_sum($arr[0][1]) +
		   array_sum($arr[1][0]) + array_sum($arr[1][1]);
	echo $sum;