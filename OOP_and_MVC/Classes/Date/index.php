<?php
require_once 'Date.php';
require_once '../Interval/Interval.php';
	$date1 = new Date('2023-12-31');
	$date2 = new Date('2026-11-28');
	
	$interval = new Interval($date1, $date2);
	echo $interval->toDays() . '<br>';
	echo $interval->toMonths() . '<br>';
	echo $interval->toYears() . '<br>';






	/*
		$date = new Date();
		$date = new Date('2025-12-31');
		echo $date . '<br>';

		echo $date->getYear() . '<br>';  // выведет '2025'
		echo $date->getMonth() . '<br>'; // выведет '12'
		echo $date->getMonth('ru') . '<br>'; // выведет 'Декабрь'
		echo $date->getMonth('en') . '<br>'; // выведет 'December'
		echo $date->getDay() . '<br>';   // выведет '31'
		
		echo $date->getWeekDay() . '<br>';     // выведет '3'
		echo $date->getWeekDay('ru') . '<br>'; // выведет 'среда'
		echo $date->getWeekDay('en') . '<br>'; // выведет 'wednesday'

		echo (new Date('2025-12-31'))->addYear(1) . '<br>'; // '2026-12-31'
		echo (new Date('2025-12-31'))->addDay(1) . '<br>';  // '2026-01-01'
		echo (new Date('2025-12-31'))->addMonth(2) . '<br>';  // '2026-01-01'
	*/
	
	