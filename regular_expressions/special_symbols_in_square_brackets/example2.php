<?php
	/*
		Дана строка:
		$str = 'xaz x.z x3z x@z x$z xrz';
		Напишите регулярку, которая найдет строки по шаблону:
		буква 'x', затем НЕ точка, НЕ собака, и НЕ доллар, а потом буква 'z'.
	*/
	$str = 'xaz x.z x3z x@z x$z xrz';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#x[^.@$]z#', '!', $str);