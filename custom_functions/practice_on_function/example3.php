<?php
	/*
		Сделайте функцию, которая будет проверять число на совершенность.
		Совершенное число - это число, сумма собственных делителей которого равна этому числу.
	*/
	$a = 28;
	if($a == func($a)){
		echo 'Perfect number<br>';
	} else {
		echo 'Not perfect number<br>';
	}
	
	function func($num){
		$sum = [];
		for($i = 1; $i < $num; $i++){
			if($num % $i === 0){
				$sum[] = $i;
			}
		}
		return array_sum($sum);
	}