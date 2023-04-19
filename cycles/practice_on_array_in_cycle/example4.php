<?php
	/*
		Запишите ключи этого массива в один массив, а значения - в другой.
	*/
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	$arr_key = [];
	$arr_val = [];
	foreach($arr as $key => $val){
		$arr_key[] = $key;
		$arr_val[] = $val;
	}
	var_dump($arr_key);
	echo '<br>';
	var_dump($arr_val);
	