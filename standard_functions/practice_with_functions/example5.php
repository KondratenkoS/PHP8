<?php
	/* #5
		Заполните массив 10-ю случайными числами от 
		1 до 10 так, чтобы они не повторялись.
	*/
	$arr = range(1, 10);
	shuffle($arr);
	print_r($arr);