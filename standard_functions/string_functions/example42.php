<?php
	/*	#42
		С помощью одного цикла и функции str_repeat выведите на экран следующую пирамидку:

		1
		22
		333
		4444
		55555
		666666
		7777777
		88888888
		999999999
	*/
	for($i = 1; $i <= 9; $i++){
		echo str_repeat($i, $i) . '<br>';
	}
	