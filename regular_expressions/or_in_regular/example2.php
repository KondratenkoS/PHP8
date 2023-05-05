<?php
	/*
		Дана строка:
		$str = 'aeeea aeea aea axa axxa axxxa';
		Напишите регулярку, которая найдет строки по шаблону:
		по краям стоят буквы 'a', а между ними - или буква 'e'
		два раза или буква 'x' любое количество раз.
	*/
	$str = 'aeeea aeea aea axa axxa axxxa';
	
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('/a(e{2}|x+)a/', '!', $str);
	