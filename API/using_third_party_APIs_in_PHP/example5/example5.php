<?php
	/*
		По ссылке - https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json
		находится API курсов валют в формате JSON. Напишите скрипт,
		который будет получать курсы валют за заданную дату. 
		Реализуйте на основе этого API сайт конвертор валют.
	*/	
		session_start();
		$url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?json';
	
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($curl);
		$array = json_decode($res, true);
		
		echo '<pre>';
		print_r($array);
		echo '</pre>';
		/*
		foreach($array as $value){
			$array[$value['r030']] = $value;
		}
		
		if(!empty($_GET['r030']) and !empty($_GET['num'])){
			$_SESSION['tst'] = $array[$_GET['r030']]['txt'];
			$_SESSION['convert'] = round($array[$_GET['r030']]['rate'] * $_GET['num'], 2);
			$_SESSION['cc'] = $array[$_GET['r030']]['cc'];
			$_SESSION['rate'] = $array[$_GET['r030']]['rate'];
			header('Location: index.php?num='.$_GET['num']);
		}
		
		/*
		[r030] => 484
		[txt] => Мексиканське песо
		[rate] => 2.164
		[cc] => MXN
		[exchangedate] => 17.07.2023
		*/