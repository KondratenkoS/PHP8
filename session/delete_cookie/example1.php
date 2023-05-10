<?php
	/*
		Удалите какую-нибудь куку. Обновите страницу и убедитесь, что она удалилась.
	*/
	setcookie('test', 'HEllo', time());
	var_dump($_COOKIE['test']);