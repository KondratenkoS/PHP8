<?php
	/*
		По ссылке - http://ipwho.is/ находится API, получающего положение пользователя по его IP.
		Реализуйте на основе этого API сайт, который по заходу на 
		страницу будет определять местоположение пользователя.
	*/
		$ip = $_SERVER['REMOTE_ADDR'];
		$ch = curl_init('http://ipwho.is/'.$ip);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HEADER, false);
		$ipwhois = json_decode(curl_exec($ch), true);
		curl_close($ch);
		$txt = $ipwhois['country'] . ' ' . $ipwhois['flag']['emoji'];
		header('Location: index.php?txt='.$txt);
		