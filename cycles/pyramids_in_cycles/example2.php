<?php
	/*
		Выведите на экран следующую пирамидку:

		1
		333
		55555
		7777777
		999999999
	*/
	for ($i = 1; $i <= 9; $i += 2) {
		for ($j = 1; $j <= $i; $j++) {
			echo $i;
		}
		
		echo '<br>';
	}