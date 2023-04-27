<?php
	/*
		Напишите код, который будет находить среднее от делителей заданного числа.
	*/
	$num = 1000;
	echo getDivisors($num);
	
	function getDivisors($num){
		$divider = [];
		for($i = $num; $i > 0; $i--){
			if($num % $i === 0){
				$divider[] = $i;
			}
		}
		return array_sum($divider) / count($divider);
	}