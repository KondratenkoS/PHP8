<?php
	/* #36
		Дан массив:
		$arr = ['a', 'b', 'c', 'b', 'a'];
		Подсчитайте сколько раз встречается каждая из букв.
	*/
	$arr = ['a', 'b', 'c', 'b', 'a'];
	print_r(array_count_values($arr));