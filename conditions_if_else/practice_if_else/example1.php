<?php
	/*
		В переменной $month лежит какое-то число из интервала от 1 до 12.
		Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).
	*/
	$month = 9;
	if($month == 12 or $month <= 2){
		echo 'Winter';
	} else if($month >= 3 and $month <= 5){
		echo 'Spring';
	} else if($month >= 6 and $month <= 8){
		echo 'Summer';
	} else if($month >= 9 and $month <= 11){
		echo 'Autumn';
	}