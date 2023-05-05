<?php
	/*
		Определите, является ли переданная строка является емейлом.
		Используйте для тестов следующие строки:
	*/
	$arr = ['addr@mail.ru',     // +
			'addr123@mail.ru',  // +
			'my-addr@mail.ru',  // +
			'my_addr@mail.ru',  // +
			'addr@site.ru',     // +
			'addr.ru',          // -
			'addr@.ru',         // -
			'my@addr@mail.ru']; // -

	$check = '/^[a-z0-9_.-]+@[a-z_.-]+\.[a-z]{2,}$/';

	foreach($arr as $elem){
		echo preg_match($check, $elem) . '<br>';
	}