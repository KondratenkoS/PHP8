<?php
	/*
		С помощью цикла сформируйте строку '123456789'
		и запишите ее в переменную $str.
		Выведите значение этой переменной на экран.
	*/
	$str = '';
	for($i = 1; $i <= 9; $i++){
		$str .= $i;
	}
	echo $str;