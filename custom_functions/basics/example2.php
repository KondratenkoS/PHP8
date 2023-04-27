<?php
	/*
		Сделайте функцию, выводящую на экран сумму чисел от 1 до 100.
	*/
	sum();
	
	function sum(){
		echo array_sum(range(1, 100));
	}