<?php
	/*
		#14
		Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая
		в мой код реализуйте такой же класс UsersCollection.
	*/
	require_once 'Employee.php';
	require_once 'Student.php';
	require_once 'UserCollection.php';
	
	$usersCollection = new UserCollection;
	
	$usersCollection->add(new Student('kyle', 100));
	$usersCollection->add(new Student('luis', 200));
	
	$usersCollection->add(new Employee('john', 300));
	$usersCollection->add(new Employee('eric', 400));
	
	// Получим полную сумму стипендий:
	echo $usersCollection->getTotalScholarship() . '<br>';
	
	// Получим полную сумму зарплат:
	echo $usersCollection->getTotalSalary() . '<br>';
	
	// Получим полную сумму платежей:
	echo $usersCollection->getTotalPayment() . '<br>';