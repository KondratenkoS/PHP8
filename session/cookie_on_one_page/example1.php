<?php
	/*
		Запишите в куку момент времени захода пользователя на страницу.
		При обновлении страницы выведите на экран, сколько времени 
		прошло с момента первого захода на страницу.
	*/
	if(!isset($_COOKIE['time'])) {
		setcookie('time', time());
		$_COOKIE['time'] = time();
	} else {
		echo time() - $_COOKIE['time'];
	}