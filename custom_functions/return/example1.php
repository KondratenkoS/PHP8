<?php
	/*
		Сделайте функцию, которая параметром принимает число,
		а возвращает куб этого числа. С помощью этой функции
		найдите куб числа 3 и запишите его в переменную $result.
	*/
	$result = cube(3);
	echo $result;
	
	function cube($a){
		return $a * $a *$a;
	}