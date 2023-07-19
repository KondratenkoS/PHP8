<?php
	/*
		Пусть массив $methods будет ассоциативным с ключами method1 и method2:

			$methods = ['method1' => 'getName', 'method2' => 'getAge'];

		Выведите имя и возраст пользователя с помощью этого массива.
	*/
	require_once 'User.php';
	$methods = ['method1' => 'getName', 'method2' => 'getAge'];
	
	$user = new User;
	echo $user->{$methods['method1']}() . ' ' . $user->{$methods['method2']}();
	