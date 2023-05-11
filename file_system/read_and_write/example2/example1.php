<?php
	/*
		Дан массив с числами. Найдите сумму этих чисел и результат запишите в файл sum.txt.
	*/
	$arr = [2, 3, 5, 7, 8, 9];
	$cont = array_sum($arr);
	file_put_contents('sum.txt', $cont);