<?php
	/*
		Напишите регулярку, которая найдет строки по шаблону:
		буква 'x', затем НЕ большая латинская буква от 1 и более раз, буква 'z'.
		
	*/
	$str = 'xAXz xeffz xGhz xzz x23z x3sSz';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#x[^A-Z]+z#', '!', $str);