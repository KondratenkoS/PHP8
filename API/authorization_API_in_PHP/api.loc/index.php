<?php
	//api
	require_once 'connection/connection.php';
	$arr = json_decode($_POST['json'], true); // переданный массив данных
	$token = '123';
	$header = getallheaders(); // получаем массив заголовков
		
	$query = "SELECT * FROM `tokens` WHERE `name` = '$arr[username]'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	
	if($data['token'] === $arr['token']){
		$date = date('d.m.Y', time());
		
		$text = file_get_contents($arr['username'].'.txt');
		file_put_contents($arr['username'].'.txt', $text . '1');
		$text = file_get_contents($arr['username'].'.txt');
		$lenth = strlen($text);	
		
		if($data['date'] != $date){
			if($lenth < 10){
				$date1 = date_create($arr['dateborn']);
				$date2 = date_create(date('d.m.Y', time()));
						
				$diff = date_diff($date1, $date2);
				echo $diff->format('%a дней');
			} else {
				echo 'Вы исчерпали все попытки';
					
					$query = "UPDATE tokens SET date = '$date' WHERE name = '$arr[username]'";
					$result = mysqli_query($link, $query) or die(mysqli_error($link));
			}
		} else {
			echo 'Вы исчерпали все попытки';
		}
	} else {
		echo 'Не верный токен';
	}
	
	// выполнение POST запроса с проверкой токена хранящегося в базе данных вместе с юзером
	/*
	if($data['token'] === $arr['token']){
			$date1 = date_create($arr['dateborn']);
			$date2 = date_create(date('d.m.Y', time()));
			
			$diff = date_diff($date1, $date2);
			echo $diff->format('%a дней');
	} else {
		echo 'Не верный токен';
	}
	*/

	// выполнение POST запроса с проверкой переданного заголовка X-Token
	/*
	if($token === $header['X-Token']){
			$date1 = date_create($arr['dateborn']);
			$date2 = date_create(date('d.m.Y', time()));
			
			$diff = date_diff($date1, $date2);
			echo $diff->format('%a дней');
	} else {
		echo 'Не верный токен';
	}
	*/

	// выполнение GET запроса
	/*
	if(isset($_GET['token']) and $_GET['token'] === $token){
		if(isset($_GET['dateborn'])){
			$date1 = date_create($_GET['dateborn']);
			$date2 = date_create(date('d.m.Y', time()));
			
			$diff = date_diff($date1, $date2);
			echo $diff->format('%a дней');
		}
	} else {
		echo 'Не верный токен';
	}
	*/
	
	//выполнение POST запроса
	/*
	if($arr['token'] === $token){
			$date1 = date_create($arr['dateborn']);
			$date2 = date_create(date('d.m.Y', time()));
			
			$diff = date_diff($date1, $date2);
			echo $diff->format('%a дней');
	} else {
		echo 'Не верный токен';
	}
	*/