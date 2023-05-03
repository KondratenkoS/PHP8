<?php
	/*
		Сделайте функцию, которая параметром будет принимать
		два числа и возвращать массив их общих делителей.
	*/
	var_dump(func(8, 8));
	
	function func($num1, $num2){
		$sum1 = [];
		$sum2 = [];
		$result = [];
		
		for($i = 1; $i < $num1; $i++){
			if($num1 % $i === 0){
				$sum1[] = $i;
			}
		}
		
		for($i = 1; $i < $num2; $i++){
			if($num2 % $i === 0){
				$sum2[] = $i;
			}
		}
		$result = array_intersect($sum1, $sum2);
		return($result);
	}