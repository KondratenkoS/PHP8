<?php
	/*
		Создайте массив с элементами 2, 5, 3, 9. 
		Умножьте первый элемент массива на второй, а третий элемент на четвертый.
		Результаты сложите, присвойте переменной $result. 
		Выведите на экран значение этой переменной.
	*/
	$a = array(2, 5, 3, 9);
	$result = ($a[0] * $a[1])+($a[2] * $a[3]);
	echo $result;