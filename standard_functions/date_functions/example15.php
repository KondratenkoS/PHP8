<?php
	/* #15
		Пусть в переменной содержится некоторый год. 
		Найдите все пятницы 13-е в этом году. 
		Результат выведите в виде массива дат.
	*/
	$year = 2023;
	$friday = [];
	for($month = 1; $month <= 12; $month++){
		$days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
		for($day = 1; $day <= $days_in_month; $day++){
			$d = date('w', mktime(0, 0, 0, $month, $day, $year));
			if($d == 5){
				if( date('d', mktime(0, 0, 0, $month, $day, $year)) == 13){
				   $friday[] = date('d.m.Y', mktime(0, 0, 0, $month, $day, $year)).'<br>';
				}
			}
		}
	}
	print_r($friday);