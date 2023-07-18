<?php
	/*
		#1
		Сделайте класс Employee, в котором будут следующие публичные свойства - name,
		age, salary. Сделайте так, чтобы эти свойства заполнялись в конструкторе при создании объекта.
		#2
		Создайте объект класса Employee с именем 'eric', возрастом 25, зарплатой 1000.
		#3
		Создайте объект класса Employee с именем 'kyle', возрастом 30, зарплатой 2000.
		#4
		Выведите на экран сумму зарплат созданных вами юзеров.
	*/
	$employ = new Employee('Eric', 25, 1000);
	$employ2 = new Employee('Kyle', 30, 2000);
	
	echo $employ->name.'<br>';
	echo $employ->age.'<br>';
	echo $employ->salary.'<br><br>';
	
	echo $employ2->name.'<br>';
	echo $employ2->age.'<br>';
	echo $employ2->salary.'<br><br>';
	
	echo $employ->salary + $employ2->salary.'<br>';
	
	class Employee{
		public $name;
		public $age;
		public $salary;
		
		public function __construct($name, $age, $salary){
			$this->name = $name;
			$this->age = $age;
			$this->salary = $salary;
		}
	}