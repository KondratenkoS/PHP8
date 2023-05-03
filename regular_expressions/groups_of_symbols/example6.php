<?php
	/*
		Дана строка:
		$str = 'ave a#a a2a a$a a4a a5a a-a aca';
		Напишите регулярку, которая заменит все пробелы на '!'.
	*/
	$str = 'ave a#a a2a a$a a4a a5a a-a aca';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#\s#', '!', $str);