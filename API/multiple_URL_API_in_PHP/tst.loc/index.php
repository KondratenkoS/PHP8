<?php
	//test
	/*
		Сделайте API с тремя URL. Обращение к первому должно отдавать текущий день,
		ко второму - текущий месяц, к третьему - текущий год.
	*/
	
	$urlYear = 'http://localhost/php8/API/multiple_URL_API_in_PHP/api.loc/year.php';
	$urlMonth = 'http://localhost/php8/API/multiple_URL_API_in_PHP/api.loc/month.php';
	$urlDay = 'http://localhost/php8/API/multiple_URL_API_in_PHP/api.loc/day.php';
	
	$resY = file_get_contents($urlYear);
	$resM = file_get_contents($urlMonth);
	$resD = file_get_contents($urlDay);
	
	echo "Год: $resY<br>";
	echo "Месяц: $resM<br>";
	echo "День: $resD<br>";
	
