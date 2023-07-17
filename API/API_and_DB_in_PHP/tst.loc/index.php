<?php
	//test
	/*
		Пусть в базе данных хранятся страны и их города. Сделайте API, которое параметром будет принимать страну и возвращать массив ее городов.
	*/
	
	$url = 'http://localhost/php8/API/API_and_DB_in_PHP/api.loc/index.php?country_name=country1';
	
	$res = file_get_contents($url);
	json_decode($res);
	var_dump($res);