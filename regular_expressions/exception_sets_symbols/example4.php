<?php
	/*
		Напишите регулярку, которая найдет строки по шаблону: 
		буква 'x', затем не большая и не маленькая латинская
		буква и не цифра от 1 до 5 от 1 и более раз, буква 'z'.
		
	*/
	$str = 'xAXFz xeFFffz x6z xGhz xzz x8z x3sSz';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#x[^A-Z,a-z,1-5]+z#', '!', $str);