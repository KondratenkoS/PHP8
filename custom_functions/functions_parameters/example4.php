<?php
	/*
		Сделайте функцию func, которая параметром будет 
		принимать 3 числа и выводить на экран их сумму. 
		С помощью этой функции выведите на экран сумму
		значений следующих переменных:
		$param1 = 1;
		$param2 = 2;
		$param3 = 3;
	*/
	$param1 = 1;
	$param2 = 2;
	$param3 = 3;
	
	sum($param1, $param2, $param3);
	
	function sum($a1, $a2, $a3){
		echo array_sum([$a1, $a2, $a3]);
	}