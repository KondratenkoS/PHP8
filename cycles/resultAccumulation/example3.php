<?php
	/*
		Найдите сумму нечетных чисел от 1 до 99.
	*/
	$result = 0;
	for($i = 1; $i <= 99; $i += 2){
		$result += $i;
		if(($result % 2) == 0){
		$result += $i;
		
		echo $i . ')' . $result . '<br>';
		}
	}