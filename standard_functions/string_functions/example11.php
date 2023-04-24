<?php
	// #11 Дана строка. Проверьте, что она начинается на 'http://'.
	$str = 'http://code.mu/ru/php/book/prime/inbuilt/string/';
	if(substr($str, 0, 7) === 'http://'){
		echo 'Начинается.';
	} else {
		echo 'Не начинается.';
	}
