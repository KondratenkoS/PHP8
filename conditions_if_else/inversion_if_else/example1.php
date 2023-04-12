<?php
	/*
		Используя оператор ! инвертируйте приведенное условие.
		if ($num1 >= 0 or $num2 <= 10) {
		echo '+';
	} else {
		echo '-';
	}
	*/
	$num1 = 3;
	$num2 = 3;
	
	if (!($num1 >= 0 or $num2 <= 10)) {
		echo '+';
	} else {
		echo '-';
	}
	