<?php
	session_start();
	
	if (!empty($_SESSION['flash'])) {
		foreach ($_SESSION['flash'] as $flash) {
			echo $flash . '<br>';
		}
		
		$_SESSION['flash'] = []; // очистим сообщения
	}