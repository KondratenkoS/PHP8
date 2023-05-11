<?php
	/*
		Пусть у вас есть файл, в котором записано некоторое число.
		Откройте этот файл, возведите число в квадрат и запишите обратно в файл.
	*/
	$test = file_get_contents('sum.txt');
	//$test *= $test;
	file_put_contents('sum.txt', $test * $test);