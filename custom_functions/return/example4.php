<?php
	/*
		Что выведет каждый из echo в результате выполнения следующего кода:
		Объясните почему.
		Ответ: echo func(10) - выполнится умножение
			   echo func(-5) - число станет положительным
			   так пройзойдет потому что return ограничен условием if,
			   в зависимости от условия выполнится 1-й или 2-й return
	*/
	function func($num) {
		if ($num <= 0) {
			return abs($num);
		} else {
			return $num * $num;
		}
	}
	
	echo func(10) . '<br>';
	echo func(-5);