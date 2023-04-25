<?php
	/* #30
		Дан массив:
		$arr = ['a', 'b', 'c', 'b', 'a'];
		Удалите из этого массива повторяющиеся элементы.
	*/
	$arr = ['a', 'b', 'c', 'b', 'a'];
	$result = array_unique($arr);
	var_dump($result);