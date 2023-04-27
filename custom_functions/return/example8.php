<?php
	/*
		Дана следующая функция:
		function func($num1, $num2) {
			if ($num1 > 0 and $num2 > 0) {
				$result = $num1 * $num2;
			} else {
				$result = $num1 - $num2;
			}
		return $result;
		}
	
		echo func(3, 4);
		Перепишите ее в сокращенной форме согласно изученной теории.
	*/
	function func($num1, $num2) {
			if ($num1 > 0 and $num2 > 0) {
				return $num1 * $num2;
			} else {
				return $num1 - $num2;
			}
		}
	
		echo func(3, 4);