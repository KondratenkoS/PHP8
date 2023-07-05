<?php
	/*
		Оберните приведенный код в функцию. Пусть эта функция параметром принимает URL, а возвращает полученный результат.
	*/
	// вызываем функцию
	curl('http://localhost/php8/CURL_library/curl_init/test.loc');
	
	// функция принимабщая адрес страницы для обращения и возвращающая результат:
	function curl($url){
		// Инициализируем сеанс:
		$curl = curl_init();
		
		// Указываем адрес страницы:
		curl_setopt($curl, CURLOPT_URL, $url);
		
		// Ответ сервера сохранять в переменную:
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		
		// Выполняем запрос, сохранив ответ в переменную:
		$res = curl_exec($curl);
		
		// Смотрим, что в переменной:
		var_dump($res);
	}