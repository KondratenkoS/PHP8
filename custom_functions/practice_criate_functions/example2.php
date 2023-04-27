<?php
	/*
		Реализуйте функцию getDivisors, которая параметром будет
		принимать число и возвращать массив его делителей,
		то есть целых чисел, на которое делится наше число.
	*/
	print_r(getDivisors(100));
	
	function getDivisors($num){
		$divider = [];
		for($i = $num; $i > 0; $i--){
			if($num % $i === 0){
				$divider[] = $i;
			}
		}
		return $divider;
	}