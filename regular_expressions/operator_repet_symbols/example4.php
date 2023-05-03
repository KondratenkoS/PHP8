<?php
	/*
		Дана строка:
		$str = 'aa aba abba abbba abca abea';
		Напишите регулярку, которая найдет строки 
		'aa', 'aba', 'abba', 'abbba', не захватив 'abca' и 'abea'.
	*/
	$str = 'aa aba abba abbba abca abea';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#ab*a#', '*', $str);