<?php
	/* #21
		Дан массив:
		$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
		Найдите позицию первого элемента '-' и удалите его с помощью функции array_splice.
	*/
	$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
	$del = array_search('-', $arr);
	array_splice($arr, $del, 1);
	var_dump($arr);
	