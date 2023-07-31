<?php
	/*
		#1
		Реализуйте класс User, подсчитывающий количество своих объектов.
	*/
	require_once 'User.php';
	
	$user = new User('Hell');
	$user2 = new User('Hell2');
	$user2 = new User('Hell2');
	echo $user->name . '<br>';
	echo User::getCount() . '<br>';