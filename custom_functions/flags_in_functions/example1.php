<?php
	/*
		Сделайте функцию, которая параметром будет принимать массив с числами,
		и проверять, что все элементы в этом массиве являются четными числами.
	*/
	$arr = [2, 4, 6, 8, 10];
	print_r(even($arr));
	
	function even($arr){
		foreach($arr as $elem){
			if($elem % 2 !== 0){
				return false;
			}
		}
		return true;
	}