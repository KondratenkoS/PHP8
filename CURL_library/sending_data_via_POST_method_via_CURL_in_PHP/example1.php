<?php
	/*
		Оберните приведенный код в функцию. Пусть эта функция параметром принимает URL, а возвращает полученный результат.
	*/
	// вызываем функцию
	curl('http://localhost/php8/CURL_library/sending_data_via_POST_method_via_CURL_in_PHP/test2.php');
	
	// функция принимабщая адрес страницы для обращения и возвращающая результат:
	function curl($url){
		// Инициализируем сеанс:
		$curl = curl_init();
		
		// Указываем адрес страницы:
		curl_setopt($curl, CURLOPT_URL, $url);
		
		// Указываем что запрос будет делаться методом POST
		curl_setopt($curl, CURLOPT_POST, true);
		
		// Указываем передаваемые данные
		//$data = ['num1' => 5, 'num2' => 4];
		$data = 'num1=3&num2=4';
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		// Указываем передаваемые данные
		//$data = ['num1' => 5, 'num2' => 4];
		$data = 'num1=3&num2=4';
		curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
		
		// Выполняем запрос, сохранив ответ в переменную:
		$res = curl_exec($curl);
		
		// Смотрим, что в переменной:
		var_dump($res);
	}