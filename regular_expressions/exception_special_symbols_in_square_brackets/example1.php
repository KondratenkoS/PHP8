<?php
	/*
		Дана строка:
		$str = 'x[]z x{}z x.z x()z';
		Напишите регулярку, которая найдет все слова по шаблону:
		буква 'x', затем любое количество любых скобок, затем буква 'z'.
	*/
	$str = 'x[]z x{}z x.z x()z';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#x[\[\{\(\]\}\)]*z#', '!', $str);