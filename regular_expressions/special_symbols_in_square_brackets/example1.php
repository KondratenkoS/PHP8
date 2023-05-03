<?php
	/*
		Дана строка:
		$str = 'aba aea aca aza axa a.a a+a a*a';
		Напишите регулярку, которая найдет строки
		'a.a', 'a+a', 'a*a', не затронув остальных.
	*/
	$str = 'aba aea aca aza axa a.a a+a a*a';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a[.*+]a#u', '!', $str);