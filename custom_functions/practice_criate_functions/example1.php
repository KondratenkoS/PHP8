<?php
	/*
		Напишите функцию, которая будет находить сумму квадратных корней элементов массива.
	*/
	$arr = [1, 2, 3, 4, 5];
	
	echo function_sqrt($arr);
	
	function function_sqrt($var){
		return array_sum(array_map('sqrt', $var));
	}