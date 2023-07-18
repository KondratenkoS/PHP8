<?php
	require_once 'User.php';
	/*
		Сделайте несколько классов в разных файлах. Подключите ваши классы к файлу index.php.
	*/
	$user = new User('Hell', 34, 300500);
	echo $user->getName().'<br>';
	echo $user->getAge().'<br>';
	echo $user->getSalary().'<br>';