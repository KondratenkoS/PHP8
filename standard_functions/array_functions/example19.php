<?php
	/* #19
		Дан массив:
		$arr = [1, 2, 3, 4, 5];
		Сделайте из него следующий массив:
		[5, 4, 3, 2, 1]
	*/
	$arr = [1, 2, 3, 4, 5];
	$result = array_reverse($arr);
	var_dump($result);