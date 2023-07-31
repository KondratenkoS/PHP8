<?php
	/*	
		#1
		Сделайте интерфейс iUser с методами getName, setName, getAge, setAge.
		#2
		Сделайте интерфейс iEmployee, наследующий от интерфейса iUser и 
		добавляющий в него методы getSalary и setSalary.
		#3
		Сделайте класс Employee, реализующий интерфейс iEmployee.
	*/
	require_once 'Employee.php';
	$employee = new Employee;
	$employee->setName('Employee');
	$employee->setAge(34);
	$employee->setSalary(100500);
	echo 'имя работника ' . $employee->getName() . '<br>';
	echo 'возраст работника ' . $employee->getAge() . '<br>';
	echo 'зарплата работника ' . $employee->getSalary() . '<br>';