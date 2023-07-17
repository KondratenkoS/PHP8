<?php
	//test
	/*
		Пусть в базе данных хранятся страны и их города. Сделайте API, которое 
		параметром будет принимать страну и возвращать массив ее городов.
	*/
	
	//$url = 'http://localhost/php8/API/API_for_CRUD_operations_in_PHP/api.loc/index.php?action=all'; //GET - запрос, возвращает все записи из БД
	//$url = 'http://localhost/php8/API/API_for_CRUD_operations_in_PHP/api.loc/index.php?action=get&id=2'; //GET - запрос, возвращает одну запись из БД, по ее id
	//$url = 'http://localhost/php8/API/API_for_CRUD_operations_in_PHP/api.loc/index.php?action=del&id=1'; //GET - запрос, удаляет одну запись из БД, по ее id
	$urlPost = 'http://localhost/php8/API/API_for_CRUD_operations_in_PHP/api.loc/index.php'; //URL принимает новые данные записи из БД через метод POST и изменяет эту запись по ее id
	
	//$res = file_get_contents($url);
	//json_decode($res);
	//var_dump($res);
	
	//CURL and POST
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, $urlPost);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	
	$date = ['action' => 'edit',
			 'id' => 2
			];
	$json = json_encode($date);
	$data = ['json' => $json];
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
	$result = curl_exec($curl);
	
	var_dump($result);