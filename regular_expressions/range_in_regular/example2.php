<?php
	/*
		Дана строка:
		$str = 'aa aba abba abbba abbbba abbbbba';
		Напишите регулярку, которая найдет строки вида 'aba',
		в которых 'b' встречается менее трех раз (включительно).
	*/
	$str = 'aa aba abba abbba abbbba abbbbba';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#ab{1,3}a#', '*', $str);