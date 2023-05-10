<?php
	/*
		Запишите в сессию время захода пользователя на сайт. 
		При обновлении страницы выводите сколько секунд назад
		пользователь зашел на сайт.
	*/
	session_start();
	if(!isset($_SESSION['time'])) {
		$_SESSION['time'] = time();
	} else {
		echo time() - $_SESSION['time'];
	}
	//session_destroy();