<?php
	/*
		#1
		Сделайте класс User, в котором будут следующие свойства - name и age.
		#2
		Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
		#3
		Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge
		поменяйте возраст на 30. Выведите новое значение возраста на экран.
		#4
		Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст 
		больше или равен 18. Если это так - пусть метод меняет возраст пользователя,
		а если не так - то ничего не делает.
	*/
	$user = new User;
	$user->name = 'John';
	$user->age = 25;
	echo $user->age.'<br>';
	$user->setAge(30); // устанавливаем новый возраст
	echo $user->age.'<br>';
	$user->setAgeModify(17); // возраст не прошел проверку, данные не изменятся
	echo $user->age.'<br>';
	$user->setAgeModify(20); // возраст прошел проверку, данные изменятся
	echo $user->age.'<br>';
	
	class User{
		public $name;
		public $age;
		
		public function setAge($age){
			$this->age = $age;
		}
		
		public function setAgeModify($age){
			if($age >= 18){
				$this->age = $age;
			}
		}
	}