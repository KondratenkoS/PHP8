<?php
	/*
		Сделайте функцию, которая параметром будет принимать массив и 
		проверять, есть ли в этом массиве два одинаковых элемента подряд.
	*/
	
	$arr = [1, 2, 3, 4, 4, 5];
	echo(same($arr));
	
	function same($arr){
		for($i = 0; $i < count($arr); $i++){
			for($j = $i + 1; $j < count($arr); $j++){
				if($arr[$i] === $arr[$j]){
					return true;
				}
			}
		}
		return false;
	}