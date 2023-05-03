<?php
	/*
		Дана строка:
		$str = 'aa aba abba abbba abbbba abbbbba';
		Напишите регулярку, которая найдет строки вида 'aba',
		в которых 'b' встречается более четырех раз (включительно).
	*/
	$str = 'aa aba abba abbba abbbba abbbbba';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#ab{4,}a#', '*', $str);