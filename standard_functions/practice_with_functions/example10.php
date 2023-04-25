<?php
	/* #10
		Заполните массив числами от 1 до 26 так,
		чтобы ключами этих чисел были буквы английского алфавита:
	*/
	$str = range('a','z');
	$int = range(1, 26);
	$result = array_combine($str, $int);
	print_r($result);