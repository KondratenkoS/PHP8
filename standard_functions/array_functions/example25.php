<?php
	/* #25
		Дан массив:
		$arr = ['a' => 1, 'b' => 2, 'c' => 3];
		Выведите на экран случайный элемент данного массива.
	*/
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	echo $arr[array_rand($arr)];