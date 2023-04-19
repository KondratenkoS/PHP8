<?php
	/*
		Найдите сумму ключей этого массива и поделите ее на сумму значений.
	*/
	$arr = [1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10];
	$sum_key = 0;
	$sum_val = 0;
	foreach($arr as $key => $val){
		$sum_key += $key;
		$sum_val += $val;
	}
	echo $sum_key / $sum_val;