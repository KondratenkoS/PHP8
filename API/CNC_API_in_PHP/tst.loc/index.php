<?php
	//test
	/*
		Реализуйте API для работы с годами, в соответствии с описанным ниже поведением.

		Проверяет год на високосность:
		http://api.loc/leap/2025/
		
		Возвращает разницу между годами:
		http://api.loc/diff/2025/2030/
	*/
	
	$url = 'http://localhost/php8/API/CNC_API_in_PHP/api.loc/index.php/leap/2024/'; //Проверяет год на високосность:
	$url = 'http://localhost/php8/API/CNC_API_in_PHP/api.loc/index.php/diff/2025/2030/'; //Возвращает разницу между годами:
	
	$res = file_get_contents($url);
	json_decode($res);
	var_dump($res);