<?php
	/*
		Дана функция, которая параметром принимает целое число и возвращает сумму его цифр:
		function getDigitsSum($num) {
			return array_sum(str_split($num, ''));
		}
		С помощью приведенной функции найдите все года от 1 до 2030, сумма цифр которых равна 13.
	*/
	$arr = range(1, 2030);
	
	foreach($arr as $elem){
		if(getDigitsSum($elem) === 13){
			echo "Сумма цифр $elem год(а) равна 13.<br>";
		}
	}
	
	function getDigitsSum($num) {
		return array_sum(str_split($num, 1));
	}