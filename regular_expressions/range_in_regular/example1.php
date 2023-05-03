<?php
	/*
		Дана строка:
		$str = 'aa aba abba abbba abbbba abbbbba';
		Напишите регулярку, которая найдет строки 
		'abba', 'abbba', 'abbbba' и только их.
	*/
	$str = 'aa aba abba abbba abbbba abbbbba';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#ab{1,4}a#', '*', $str);