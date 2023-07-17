<?php
	//test
	
	/*	
		#1
		Сделайте API, которое параметром будет принимать массив дат,
		а отдавать массив исторических событий, случившихся в переданные даты.
	*/
	
	//$res = file_get_contents('http://localhost/php8/API/API_with_POST_parameters_in_PHP/api.loc/index.php');
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://localhost/php8/API/API_with_POST_parameters_in_JSON_format_in_PHP/api.loc/index.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	
	$date = ['12.07.2023', '15.07.2023'];
	$json = json_encode($date);
	$data = ['json' => $json];
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
	$res = curl_exec($curl);
	
	var_dump($res);