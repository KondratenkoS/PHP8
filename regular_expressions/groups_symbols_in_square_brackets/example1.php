<?php
	/*
		Напишите регулярку, которая найдет строки по шаблону:
		цифра или точка от 1 и более раз.
	*/
	$str = 'xaz x...z x343z x@z x$z xrz';
	echo 'Оригинал: ' . $str . 
		 '<br>Изменено: ' . preg_replace('#x[\d.]+z#', '!', $str);