<?php
	/*
		Используя созданную вами функцию из предыдущей задачи найдите
		все пары дружественных чисел в промежутке от 1 до 1000.
	*/
	func(1, 1000);
	
	function func($min, $max){
		$arr = [];
		for($i = $min; $i <= $max; ++$i){
			$arr[$i] = array_sum(sumDivisors($i));
		}
		foreach($arr as $key => $val){
			if($val <= $key and $key == $arr[$val]){
				echo "$val $key<br>";
            } 
		}
	}
	
	function sumDivisors($num){
		$divider = [];
		for($i = 1; $i < $num; $i++){
			if($num % $i === 0){
				$divider[] = $i;
			}
		}
		return $divider;
	}