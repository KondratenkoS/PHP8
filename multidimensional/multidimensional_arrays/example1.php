<?php
	/*
		Выведите из массива элементы с текстом 'l', 'e', 'g' и 'a'.
	*/
	$arr = [
		['a', 'b', 'c'],
		['d', 'e', 'f'],
		['g', 'h', 'i'],
		['j', 'k', 'l'],
	];
	echo $arr[3][2] . '<br>';
	echo $arr[1][1] . '<br>';
	echo $arr[2][0] . '<br>';
	echo $arr[0][0] . '<br>';