<?php
	/*
		Дан массив:
		$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
		С помощью рекурсии выведите элементы этого массива на экран.
	*/
	$arr = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
	rec($arr);
	
	function rec($arr){
		print_r(array_shift($arr));
		
		while(count($arr) > 0){
			rec($arr);
			break;
		}
	}