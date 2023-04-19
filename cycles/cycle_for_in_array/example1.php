<?php
	/*
		С помощью цикла for выведите все эти элементы на экран.
	*/
	$arr = ['a', 'b', 'c', 'd', 'e'];
	$count = count($arr);
	for($i = 0; $i < $count; $i++){
		echo $arr[$i] . '<br>';
	}