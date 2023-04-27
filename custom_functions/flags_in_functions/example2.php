<?php
	/*
		Сделайте функцию, которая параметром будет принимать число и
		проверять, что все цифры это числа являются нечетными.
	*/
	$num = 123456;
	print_r(odd($num));
	
	function odd($num){
		$arr = str_split($num, 1);

		foreach($arr as $elem){
			if($elem % 2 !== 0){
				return true;
			}
		}
		return false;
	}