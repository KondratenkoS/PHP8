<?php
	/*
		Внесите соответствующие исправления в вашу функцию.
		Попробуйте обратиться к несуществующему сайту. Изучите текст ошибки CURL для этого случая.
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
		
		// Проверяем на ошибку
		if($res === false){
			echo curl_error($res);
		} else {
			// Если нет ошибки, смотрим, что в переменной:
			var_dump($res);
		}
	}