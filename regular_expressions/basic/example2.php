<?php
	/*
		Дана строка:
		$str = 'ahb acb aeb aeeb adcb axeb';
		Напишите регулярку, которая найдет строки 'abba', 'adca', 'abea'
		по шаблону: буква 'a', два любых символа, буква 'b'.
	*/
	$str = 'ahb acb aeb aeeb adcb axeb';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a..b#', 'воть', $str);