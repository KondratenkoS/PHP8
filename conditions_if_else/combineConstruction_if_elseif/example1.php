<?php
	/*
		В переменной $day лежит какое-то число из интервала от 1 до 31.
		Определите в какую декаду месяца попадает это число.
	*/
	$test = 25;
	if($test >= 1 and $test<= 7){
		echo 'Первая неделя';
	}
	if($test >= 8 and $test<= 14){
		echo 'Вторая неделя';
	}
	if($test >= 15 and $test<= 22){
		echo 'Третья неделя';
	}
	if($test >= 23 and $test<= 30){
		echo 'Четвертая неделя';
	}