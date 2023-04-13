<?php
	/*
		Решите предыдущую задачу на декады месяца через конструкцию elseif.
	*/
	$test = 10;
	if($test >= 1 and $test <= 7){
		echo 'First week';
	} elseif($test >= 8 and $test <= 15){
		echo 'Second week';
	} elseif($test >= 16 and $test <= 23){
		echo 'Third week';
	} elseif($test >= 24 and $test <= 31){
		echo 'Fourth week';
	}