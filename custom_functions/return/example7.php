<?php
	/*
		Напишите функцию, которая параметром будет принимать 
		число и делить его на 2 столько раз, пока результат 
		не станет меньше 10. Пусть функция возвращает количество
		итераций, которое потребовалось для достижения результата.
	*/
	echo test(100);
	
	function test($num){
		$i = 0;
		while($num >= 10){
			$num /= 2;
			$i++;
		}
		return $i;
	}