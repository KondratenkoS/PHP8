<?php
	//test
	/*
		#1
		Сделайте API, которое параметром будет принимать дату дня рождения и возвращать
		сколько дней осталось до этой даты. Сделайте авторизацию по токену.
		#2
		Модифицируйте предыдущую задачу так, чтобы и параметр, и токен передавались методом POST.
		#3
		Модифицируйте предыдущую задачу так, чтобы токен передавался через HTTP заголовок X-Token.
		#4
		Сделайте так, чтобы токены хранились в базе данных и у каждого пользователя API был свой токен.
		#5
		Ограничьте каждому пользователю API количество запросов до 10 в день.
	*/
	
	//$url = 'http://localhost/php8/API/authorization_API_in_PHP/api.loc/index.php?token=123&dateborn=15.09.2023'; //для гет запроса
	$url = 'http://localhost/php8/API/authorization_API_in_PHP/api.loc/index.php';
	
	//$headers = ['X-Token: 123']; // заголовок с токеном
	
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($curl, CURLOPT_HTTPHEADER, $headers); // опция в CURL необходимая для передачи массива заголовков
	curl_setopt($curl, CURLOPT_POST, true);
	
	$date = ['token' => '123', 
			 'dateborn' => '15.09.2023',
			 'username' => 'user1',
			 'token' => '1234'
			];
	$json = json_encode($date);
	$data = ['json' => $json];
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
	$res = curl_exec($curl);
	
	var_dump($res);
