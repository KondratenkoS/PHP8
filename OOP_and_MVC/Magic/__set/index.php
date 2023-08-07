<?php
	/*
		Пусть дан вот такой класс User с геттерами и сеттерами свойств:

			class User
			{
				private $name;
				private $age;
				
				public function getName()
				{
					return $this->name;
				}
				
				public function setName($name)
				{
					if ($name != '') { // проверяем имя на непустоту
						$this->name = $name;
					}
				}
				
				public function getAge()
				{
					return $this->age;
				}
				
				public function setAge($age)
				{
					if ($age >= 0 and $age <= 70) { // проверяем возраст
						$this->age = $age;
					}
				}
			}

		Переделайте код этого класса так, чтобы вместо геттеров и сеттеров 
		использовались магический методы __get и __set.
	*/
require_once 'User.php';

	$user = new User;
	$user->name = 'Name';
	$user->age = 34;
	echo $user->name . '<br>';
	echo $user->age . '<br>';