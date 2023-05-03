<?php
	/*
		Сделайте функцию, которая будет проверять пару чисел на
		дружественность. Дружественные числа - два числа, для 
		которых сумма всех собственных делителей первого числа
		равна второму числу и наоборот, сумма всех собственных 
		делителей второго числа равна первому числу.
	*/
	$a = 220;
	$b = 284;
	if(sumDivisors($b) === sumDivisors($a)){
		echo 'Friendly<br>';
	} else {
		echo 'Not Friendly';
	}

	function sumDivisors($num){
		$divider = [];
		for($i = $num; $i > 0; $i--){
			if($num % $i === 0){
				$divider[] = $i;
			}
		}
		return array_sum($divider);
	}