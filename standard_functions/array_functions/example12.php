<?php
	/* #12
		Дан массив:
		$arr = [1, 2, 3, 4, 5];
		С помощью функции array_splice сделайте из него следующий массив:
		[1, 4, 5]
	*/
	$arr = [1, 2, 3, 4, 5];
	$result = array_splice($arr, 1, 2);
	var_dump($arr);