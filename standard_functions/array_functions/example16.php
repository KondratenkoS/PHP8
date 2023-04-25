<?php
	/* #16
		Дан массив:
		$arr = ['a' => 1, 'b' => 2, 'c' => 3];
		Запишите в массив $keys ключи из этого массива, а в $values – значения.
	*/
	$arr = ['a' => 1, 'b' => 2, 'c' => 3];
	$keys = array_keys($arr);
	$values = array_values($arr);
	var_dump($keys);
	echo '<br><br>';
	var_dump($values);