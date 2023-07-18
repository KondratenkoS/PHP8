<?php
	/*
		#1
		Сделайте класс Employee, в котором будут следующие приватные свойства: name, age и salary.
		#2
		Сделайте геттеры и сеттеры для всех свойств класса Employee.
		#3
		Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст
		на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge
		перед установкой нового возраста (если возраст не корректный - он не должен меняться).
		#4
		Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary
		добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве
		salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.
	*/
	$employ = new Employee;
	$employ->setName('Hell');
	$employ->setAge(110);
	$employ->setSalary(1000);
	
	echo $employ->getName().'<br>';
	echo $employ->getAge().'<br>';
	echo $employ->getSalary().'<br>';
	
	class Employee{
		private $name;
		private $age;
		private $salary;
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function setAge($age){
			if($this->isAgeCorrect($age)){
				$this->age = $age;	
			}
		}
		
		public function setSalary($salary){
			$this->salary = $salary;
		}
		
		public function getName(){
			return $this->name;
		}
		
		public function getAge(){
			return $this->age;
		}
		
		public function getSalary(){
			return $this->salary.'$';
		}
		
		private function isAgeCorrect($age){
			if($age >= 1 || $age <= 100){
				return true;
			}
		}
	}