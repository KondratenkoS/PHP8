<?php
	/* #9
		Создайте массив дней недели. С помощью этого массива и функции date 
		выведите на экран название текущего дня недели. Узнайте какой день 
		недели был 06.06.2006, в ваш день рождения.
	*/
	$week = [1 => 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat', 'Sun'];
	$day = date('w');
	echo $week[$day] . '<br>';
	$day_b = date('w', mktime(0, 0, 0, 9, 15, 2006));
	echo $week[$day_b];