<?php
	/*
		Дан массив с числами. Найдите позицию первого числа 3
		в этом массиве (считаем, что это число обязательно есть в массиве).
	*/
	$arr = [1 => 1, 5, 7, 3, 0, 3, 6, 8, 4, 3];
	foreach($arr as $key => $val){
		if($val == 3){
			echo $key . '<br>';
			break;
		} 
	}
	