<?php
	/*
		Дана строка:
		$str = 'abc def xyz';
		Напишите регулярку, которая найдет первую подстроку из букв.
	*/
	$str = 'abc def xyz';
	
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('/^\w+/', '!', $str);
	