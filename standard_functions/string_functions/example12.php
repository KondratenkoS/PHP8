<?php
	// #12 Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'.
	$str = 'https://code.mu/ru/php/book/prime/inbuilt/string/';
	if(substr($str, 0, 7) === 'http://' or substr($str, 0, 8) === 'https://'){
		echo 'Начинается.';
	} else {
		echo 'Не начинается.';
	}
