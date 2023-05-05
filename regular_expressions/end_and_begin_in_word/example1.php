<?php
	/*
		Дана строка:
		$str = 'aaa xaa aaa xbb aaa';
		Напишите регулярку, которая найдет строки по 
		шаблону: буква 'x' в начале слова.
	*/
	$str = 'aaa xaa aaa xbb aaa';
	
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('/\bx/', '!', $str);
	