<?php
	/*
		Дана строка:
		$str = 'aAa aea aEa aJa a3a';
		Напишите регулярку, которая найдет по следующему шаблону:
		по краям стоят буквы 'a', а между ними - буква от a до f и от A до D.
	*/
	$str = 'aAa aea aEa aJa a3a';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a[A-D,a-f]a#', '!', $str);