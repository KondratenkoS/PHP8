<?php
	/*
		Дан массив с числами. Переберите его циклом и в каждой итерации цикла
		выведите сумму предыдущего, текущего и следующего элементов массива.
	*/
	$arr = [1, 2, 3, 4, 5];
	$count = count($arr);
	for($i = 1; $i < $count; $i++){
		echo $arr[$i - 1] + $arr[$i] + $arr[$i + 1] . '<br>';
	}