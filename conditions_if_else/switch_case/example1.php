<?php
	/*
		Переменная $num может принимать значения 1, 2, 3 или 4.
		Определите, в какую пору года попадает значение этой переменной.
	*/
	$num = 4;
	switch($num){
		case 1:
			echo 'Winter';
		break;
		case 2:
			echo 'Spring';
		break;
		case 3:
			echo 'Summer';
		break;
		case 4;
			echo 'Autumn';
		break;
	}