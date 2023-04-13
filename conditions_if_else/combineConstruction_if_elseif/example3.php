<?php
	/*
		Модифицируйте предыдущую задачу так, чтобы, если в переменной $day
		будет не число от 1 до 31, выдавалось сообщение об ошибке.
	*/
	$test = -1;
	if($test >= 1 and $test <= 7){
		echo 'First week';
	} elseif($test >= 8 and $test <= 15){
		echo 'Second week';
	} elseif($test >= 16 and $test <= 23){
		echo 'Third week';
	} elseif($test >= 24 and $test <= 31){
		echo 'Fourth week';
	} elseif($test < 1 or $test > 31){
		echo 'Wrong date!';
	}