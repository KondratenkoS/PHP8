<?php
	/*
		По ссылке - https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?xml
		находится API курсов валют в формате XML.
		Напишите скрипт, который будет получать курсы валют за заданную дату.
		Реализуйте на основе этого API сайт конвертор валют.
		Курс на дату, дата задається у форматі: yyyymmdd, де yyyy - рік, mm - місяць, dd - день
	*/	
		session_start();
		$date = '';
		
		if(!empty($_GET['year']) and !empty($_GET['month']) and !empty($_GET['day'])){
			$date = $_GET['year'] . $_GET['month'] . $_GET['day'];
			var_dump($date);
		}
		
		$url = 'https://bank.gov.ua/NBUStatService/v1/statdirectory/exchange?date='.$date;
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$res = curl_exec($curl);
		$xml = simplexml_load_string($res);
		$json = json_encode($xml);
		$array = json_decode($json,TRUE);

		foreach($array as $values){
			foreach($values as $value){
				$values[$value['r030']] = $value;
			}
		}
		
		echo '<pre>';
		//print_r($values);
		echo '</pre>';
		
		
		if(!empty($_GET['r030']) and !empty($_GET['num'])){
			$_SESSION['tst'] = $values[$_GET['r030']]['txt'];
			$_SESSION['convert'] = round($values[$_GET['r030']]['rate'] * $_GET['num'], 2);
			$_SESSION['cc'] = $values[$_GET['r030']]['cc'];
			$_SESSION['rate'] = $values[$_GET['r030']]['rate'];
			header('Location: index.php?num='.$_GET['num']);
		}
		
		/*
		[r030] => 484
		[txt] => Мексиканське песо
		[rate] => 2.164
		[cc] => MXN
		[exchangedate] => 17.07.2023
		*/