<?php
	/*
		#1
		Не подсматривая в мой код создайте такой же класс User с такими же методами
		get, set, check.
		#2
		Создайте объект этого класса User проверьте работу методов setAge и addAge.
		#3
		Добавьте также метод subAge, который будет выполнять уменьшение текущего
		возраста на переданное количество лет.
	*/
	$user = new User;
	$user->setName('Hell');
	$user->setAge(17); //проверка не пройдена, возраст не добавился
	$user->setAge(20); //проверка пройдена, возраст добавился
	echo $user->getName().'<br>';
	echo $user->getAge().'<br>';
	$user->addAge(50); //проверка не пройдена, возраст не изменился
	echo $user->getAge().'<br>';
	$user->addAge(20); //проверка пройдена, возраст изменился
	echo $user->getAge().'<br>';
	$user->subAge(50); //проверка не пройдена, возраст не изменился
	echo $user->getAge().'<br>';
	$user->subAge(10); //проверка пройдена, возраст изменился
	echo $user->getAge().'<br>';
	
	class User{
		public $name;
		public $age;
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function setAge($age){
			if($this->checkAge($age)){
				$this->age = $age;
			}
		}
		
		public function getAge(){
			return $this->age;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function addAge($age){
			$age = $this->age + $age;
			
			if($this->checkAge($age)){
				$this->age = $age;
			}
		}
		
		public function subAge($age){
			$age = $this->age - $age;
			
			if($this->checkAge($age)){
				$this->age = $age;
			}
		}
		
		public function checkAge($age){
			if($age >= 18 and $age <= 60){
				return true;
			}
		}
	}