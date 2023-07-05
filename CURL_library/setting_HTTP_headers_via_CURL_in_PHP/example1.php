<?php
	/*
		#1. Отправьте запрос на следующую страницу, указав заголовок X-Test:

			echo $_SERVER['HTTP_X_TEST'];
			
		#2. Отправьте запрос на следующую страницу и получите результат:

			if ($_SERVER['HTTP_X_TEST'] === '12345') {
				echo 'result';
			} else {
				echo 'error';
			}
	*/
	// вызываем функцию
	curl('http://localhost/php8/CURL_library/setting_HTTP_headers_via_CURL_in_PHP/test.php');
	
	// функция принимабщая адрес страницы для обращения и возвращающая результат:
	function curl($url){
		// Инициализируем сеанс:
		$curl = curl_init();
		
		$headers2 = ['X-TEST: 12345'];
		
		// Указываем адрес страницы:
		curl_setopt($curl, CURLOPT_URL, $url);
		
		//curl_setopt($curl, CURLOPT_HTTPHEADER, $headers1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers2);
		
		// Выполняем запрос, сохранив ответ в переменную:
		$res = curl_exec($curl);
	}