<?php
	/*
		#1
		Переделайте методы класса ArraySumHelper на статические.
		#2
		Пусть дан массив с числами. Найдите с помощью класса ArraySumHelper 
		сумму квадратов элементов этого массива.
	*/
	require_once 'ArraySumHelper.php';
	
	$arr = [2, 4, 5, 6, 7];
	
	echo ArraySumHelper::getSum2($arr);