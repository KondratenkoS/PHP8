<?php
	/*
		Сделайте функцию, которая параметрами принимает 3 числа
		и выводит на экран сумму этих чисел.
	*/
	sum(10, 20, 30);
	function sum($a1, $a2, $a3){
		echo array_sum([$a1, $a2, $a3]);
	}