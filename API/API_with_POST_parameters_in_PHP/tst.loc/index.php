<?php
	//test
	
	/*	
		#1
		Сделайте API, которое POST данными будет принимать знак зодиака и дату,
		а отдавать гороскоп для этого знака на заданную дату.
	*/
	
	//$res = file_get_contents('http://localhost/php8/API/API_with_POST_parameters_in_PHP/api.loc/index.php');
	$curl = curl_init();
	curl_setopt($curl, CURLOPT_URL, 'http://localhost/php8/API/API_with_POST_parameters_in_PHP/api.loc/index.php');
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_POST, true);
	
	$data = ['znack'=>'znack3', 'date'=>'date2'];
	curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
	
	$res = curl_exec($curl);
	
	var_dump($res);