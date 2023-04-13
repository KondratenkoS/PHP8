<?php
	/*
		С помощью цикла foreach и оператора if выведите в консоль нечетные элементы массива.
	*/
	$arr = [1, 2, 3, 4, 5];
	foreach($arr as $elem){
		if($elem % 2 != 0){
			echo $elem . '<br>';
		}
	}