<?php
	/*
		Дан массив с числами. Переберите его циклом и в каждой итерации
		цикла выведите два предыдущих элемента массива.
	*/
	$arr = [1, 2, 3, 4, 5];
	$count = count($arr);
	for($i = 2; $i < $count; $i++){
		echo $arr[$i - 2] . ', ' . $arr[$i - 1] . '<br>';
	}