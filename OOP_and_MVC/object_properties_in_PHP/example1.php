<?php
	/*
		#1
		Сделайте класс Employee (работник), в котором будут следующие
		свойства - name (имя), age (возраст), salary (зарплата).
		#2
		Создайте объект класса Employee, затем установите его свойства 
		в следующие значения - имя 'john', возраст 25, зарплата 1000.
		#3
		Создайте второй объект класса Employee, установите его свойства
		в следующие значения - имя 'eric', возраст 26, зарплата 2000.
		#4
		Выведите на экран сумму зарплат созданных юзеров.
		#5
		Выведите на экран сумму возрастов созданных юзеров.
	*/
	$employee = new Employee;
	$employee->name = 'John';
	$employee->age = 25;
	$employee->salary = 1000;
	
	$employee2 = new Employee;
	$employee2->name = 'Eric';
	$employee2->age = 26;
	$employee2->salary = 2000;
	
	echo $employee->salary + $employee2->salary.'<br>'; // сумма зарплат созданных юзеров
	echo $employee->age + $employee2->age.'<br>'; // сумма возрастов созданных юзеров
	
	class Employee{
		public $name;
		public $age;
		public $salary;
	}