<?php
	/* #10
		Создайте массив месяцев. С помощью этого массива и 
		функции date выведите на экран название текущего месяца.
	*/
	$months = [1 => 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
	$m = date('n');
	echo $months[$m];