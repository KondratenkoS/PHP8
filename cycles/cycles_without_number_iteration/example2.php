<?php
	/*
		Дано число $num с неким начальным значением. 
		Умножайте его на 3 столько раз, пока результат 
		умножения не станет больше 1000. Какое число получится?
		Посчитайте количество итераций, необходимых для этого.
		Решить циклом for.
	*/
	$num = 10;
	for($i = 0; $num < 1000; $i++){
		$num *= 3;
	}
	echo $i . ' - количество итераций необходмых для получения ' . $num;