<?php
	/*
		Модифицируйте предыдущую задачу так, чтобы в каждой итерации цикла 
		выводилась сумма двух предыдущих элементов и текущего элемента массива.
	*/
	$arr = [1, 2, 3, 4, 5];
	$count = count($arr);
	for($i = 2; $i < $count; $i++){
		echo $arr[$i - 2] . ', ' . $arr[$i - 1] . ', ' . $arr[$i] . '<br>';
	}