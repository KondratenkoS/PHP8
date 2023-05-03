<?php
	/*
		Дана строка:
		$str = 'ahb acb aeb aeeb adcb axeb';
		Напишите регулярку, которая найдет строки 
		'ahb', 'acb', 'aeb' по шаблону: буква 'a',
		любой символ, буква 'b'.
	*/
	$str = 'ahb acb aeb aeeb adcb axeb';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#a.b#', 'воть', $str);