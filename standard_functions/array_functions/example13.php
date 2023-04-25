<?php
	/* #13
		Дан массив:
		$arr = [1, 2, 3, 4, 5];
		С помощью функции array_splice сделайте из него следующий массив:
		[2, 3, 4]
	*/
	$arr = [1, 2, 3, 4, 5];
	$result = array_splice($arr, 1, 3);
	var_dump($result);