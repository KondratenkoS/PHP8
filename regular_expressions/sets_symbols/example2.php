<?php
	/*
		Дана строка:
		$str = 'a1a a3a a7a a9a aba';
		Напишите регулярку, которая найдет по следующему шаблону:
		по краям стоят буквы 'a', а между ними - цифра от 3-х до 6-ти.
	*/
	$str = 'a1a a3a a7a a9a aba';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a[3-6]a#', '!', $str);