<?php
	/*
		#1. Отправьте запрос на следующую страницу - "test.php" и получите результат:
		if (!empty($_COOKIE)) {
			echo json_encode($_COOKIE);
		} else {
			echo 'error';
		}
		
		#2. Отправьте запрос на следующую страницу - "test2.php" и получите результат:

		<div>
			<?php
				if (!empty($_COOKIE)) {
					echo $_COOKIE['num1'] + $_COOKIE['num2'];
				} else {
					echo 'error';
				}
			?>
		</div>
	*/
	// вызываем функцию
	curl('http://localhost/php8/CURL_library/sending_cookies_to_server_via_CURL_in_PHP/test2.php');
	
	// функция принимабщая адрес страницы для обращения и возвращающая результат:
	function curl($url){
		// Инициализируем сеанс:
		$curl = curl_init();
		
		// Указываем адрес страницы:
		curl_setopt($curl, CURLOPT_URL, $url);
		
		// Устанавливаем куку для test.php
		curl_setopt($curl, CURLOPT_COOKIE, 'name=john');
		// Устанавливаем куку для test2.php
		curl_setopt($curl, CURLOPT_COOKIE, 'num1=23; num2=23');
		
		// Выполняем запрос, сохранив ответ в переменную:
		$res = curl_exec($curl);
	}