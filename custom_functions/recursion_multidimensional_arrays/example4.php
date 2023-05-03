<?php
	/*
		Дан многомерный массив произвольного уровня вложенности, например, такой:
		$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
		Возведите все элементы-числа этого массива в квадрат.
	*/
	$arr = [1, [2, 7, 8], [3, 4], [5, [6, 7]]];
	print_r(func($arr));
	
	function func($arr) {
		$length = count($arr);
		
		for ($i = 0; $i < $length; $i++) {
			if (is_array($arr[$i])) {
				$arr[$i] = func($arr[$i]);
			} else {
				$arr[$i] = $arr[$i] * $arr[$i];
			}
		}
		
		return $arr;
	}
	