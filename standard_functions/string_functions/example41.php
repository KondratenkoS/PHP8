<?php
	/*	#41
		С помощью одного цикла и функции str_repeat выведите на экран следующую пирамидку:

		x
		xx
		xxx
		xxxx
		xxxxx
		xxxxxx
		xxxxxxx
		xxxxxxxx
		xxxxxxxxx
	*/
	for($i = 1; $i <= 9; $i++){
		echo str_repeat('x', $i) . '<br>';
	}
	