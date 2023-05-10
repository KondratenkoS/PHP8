<?php
	/*
		Сделайте страницу logout.php, при заходе на которую
		будет завершаться сессия пользователя.
	*/
	session_start();
	if(isset($_SESSION)){
		 session_destroy();
		echo 'Сессия удалена';
	} else {
		echo 'Сессия не удалена';
	}