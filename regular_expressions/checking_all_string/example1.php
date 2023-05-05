<?php
	/*
		Определите, является ли переданная строка доменом.
		Используйте для тестов следующие строки:
	*/
	$arr = ['site.ru',          // +
		    'site.com',         // +
		    'my-site.com',      // +
		    'my-cool-site.com', // +
			'my_site.com',      // +
			'site123.com',      // +
			'site.travel',      // +
			'si$te.com',        // -
			'site.r'];          // -

	$check = '/^[a-z0-9-_]+\.[a-z]{2,}$/';

	foreach($arr as $elem){
		echo preg_match($check, $elem) . '<br>';
	}