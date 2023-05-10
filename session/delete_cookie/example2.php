<?php
	/*
		Удалите какую-нибудь куку с помощью хитрого приема. 
		Убедитесь, что она будет удалена сразу.
	*/
	if (isset($_COOKIE['test'])) {
		setcookie('test', 'Hello', time());
		unset($_COOKIE['test']);
	}
	
	var_dump($_COOKIE['test']);