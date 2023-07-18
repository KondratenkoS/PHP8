<?php
	/*
		#1
		Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.
		#2
		Сделайте в классе Employee метод getName, который будет возвращать имя работника.
		#3
		Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
		#4
		Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
		#5
		Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику
		больше 18 лет и возвращать true, если это так, и false, если это не так.
		#6
		Создайте два объекта класса Employee, запишите в их свойства какие-либо значения.
		С помощью метода getSalary найдите сумму зарплат созданных работников.
	*/
	$employee = new Employee;
	$employee2 = new Employee;
	
	$employee->name = 'Hell';
	$employee->age = 34;
	$employee->salary = 100500;
	
	$employee2->name = 'Hell2';
	$employee2->age = 17;
	$employee2->salary = 500100;
	
	echo $employee->getSalary() + $employee2->getSalary().'<br>'; // сумма зарплат
	
	if($employee->checkAge()){ // если прошла проверка на возраст вывести зарплату работника 1
		echo $employee->getSalary();
	}
	
	if($employee2->checkAge()){ // если прошла проверка на возраст вывести зарплату работника 2
		echo $employee->getSalary();
	}
	
	class Employee{
		public $name;
		public $age;
		public $salary;
		
		public function getName(){
			return $this->name;
		}
		
		public function getAge(){
			return $this->age;
		}
		
		public function getSalary(){
			return $this->salary;
		}
		
		public function checkAge(){
			if($this->age > 18){
				return true;
			} else {
				return false;
			}
		}
	}