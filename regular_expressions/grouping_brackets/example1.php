<?php
	/*
		Дана строка:
		$str = 'ab abab abab abababab abea';
		Напишите регулярку, которая найдет строки по шаблону:
		строка 'ab' повторяется 1 или более раз.
	*/
	$str = 'ab abab abab abababab abea';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#(ab)+#', '*', $str);