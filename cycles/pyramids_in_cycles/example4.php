<?php
	/*
		Выведите на экран следующую пирамидку:

		999999999
		88888888
		7777777
		666666
		55555
		4444
		333
		22
		1
	*/
	for ($i = 9; $i >= 1; $i--) {
		for ($j = 0; $j < $i; $j++) {
			echo $i;
		}
		echo '<br>';
	}