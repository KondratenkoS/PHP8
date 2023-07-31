<?php
	/*
		#1
		Пусть у нас дан такой интерфейс iUser:

			interface iUser
			{
				public function setName($name); // установить имя
				public function getName();      // получить имя
				public function setAge($age);   // установить возраст
				public function getAge();       // получить возраст
			}

		Сделайте класс User, который будет реализовывать данный интерфейс.
	*/
require_once 'User.php';

	$user = new User;
	$user->setName('User');
	$user->setAge(34);
	echo $user->getName() . ' ' . $user->getAge();