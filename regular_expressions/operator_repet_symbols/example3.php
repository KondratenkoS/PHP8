<?php
	/*
		Дана строка:
		$str = 'aa aba abba abbba abca abea';
		Напишите регулярку, которая найдет строки по шаблону:
		буква 'a', буква 'b' один раз или ниодного, буква 'a'.
	*/
	$str = 'aa aba abba abbba abca abea';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#ab?a#', '*', $str);