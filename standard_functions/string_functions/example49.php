<?php
	/*	#49
		Запишите в переменную $str случайный символ - 
		большую букву латинского алфавита. Для этого с 
		помощью таблицы ASCII определите какие целые 
		числа соответствуют большим буквам латинского алфавита.
	*/
	$str = chr(mt_rand(65, 90));
	echo $str;