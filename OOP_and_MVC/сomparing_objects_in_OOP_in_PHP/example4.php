<?php
	/*
		#4
		Скопируйте мой код класса Employee, затем самостоятельно реализуйте 
		описанный класс EmployeesCollection, проверьте его работу.
	*/
	require_once 'Employee.php';
	require_once 'EmployeesCollection.php';
	
	$employeesCollection = new EmployeesCollection;
	
	$employeesCollection->add(new Employee('Hell', 5000));
	$employeesCollection->add(new Employee('Hell', 5500));
	$employeesCollection->add(new Employee('Hell\'s', 4000));
	$employeesCollection->add(new Employee('Hellcho', 3000));
	
	echo '<pre>';
	print_r($employeesCollection->getEmployees());
	echo '</pre>';