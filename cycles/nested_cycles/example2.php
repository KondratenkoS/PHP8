<?php
	/*
		С помощью двух вложенных циклов выведите на экран следующую строку:
		11 12 13 21 22 23 31 32 33
	*/
	for($i = 1; $i <= 3; $i++){
		for($j =1; $j <= 3; $j++){
			echo $i . $j . ' ';
		}
	}