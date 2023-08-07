<?php
	/*
		#1
		Сделайте класс User, в котором будут следующие свойства - name, surname, patronymic.
		Сделайте так, чтобы при выводе объекта через echo на экран выводилось ФИО пользователя.
	*/
require_once 'User.php';
require_once 'Arr.php';
	$user = new User('Name', 'Surname', 'Patronymic');
	echo $user . '<br>';
	
	$arr = new Arr;
	echo $arr->add(3)->add(4)->add(5)->add(6);