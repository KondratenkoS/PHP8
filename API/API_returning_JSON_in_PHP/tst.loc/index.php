<?php
	//test
	
	/*	
		#1
		Сделайте API, которое будет возвращать массив дат праздников в текущем году.
	*/
	
	$res = file_get_contents('http://localhost/php8/API/API_returning_JSON_in_PHP/api.loc/index.php?date=06-07-23');
	json_decode($res);
	var_dump($res);