<?php
	/*
		Дана строка:
		$str = 'a.a aba aea';
		Напишите регулярку, которая найдет строку 'a.a', не захватив остальные.
	*/
	$str = 'a.a aba aea';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a\.a#', '*', $str);