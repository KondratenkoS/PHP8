<?php
	/*
		#1
		Самостоятельно, не подсматривая в мой код, реализуйте такой же абстрактный
		класс User, а также классы Employee и Student, наследующие от него.
	*/
	require_once 'User.php';
	require_once 'Employee.php';
	require_once 'Student.php';
	
	$employee = new Employee;
	$student = new Student;
	
	$employee->setName('Employee');
	$employee->setSalary(100500);
	
	$student->setName('Student');
	$student->setScholarship(3000);
	
	
	echo 'Работник ' . $employee->getName() . ' ' . $employee->getSalary() . '<br>';
	echo 'Студент ' . $student->getName() . ' ' . $student->getScholarship() . '<br>';
	
	$employee->increaseRevenue(100500);
	$student->increaseRevenue(3000);
	
	echo 'Работник ' . $employee->getName() . ' ' . $employee->getSalary() . '<br>';
	echo 'Студент ' . $student->getName() . ' ' . $student->getScholarship() . '<br>';
	
	$employee->decreaseRevenue(10000);
	$student->decreaseRevenue(2000);
	
	echo 'Работник ' . $employee->getName() . ' ' . $employee->getSalary() . '<br>';
	echo 'Студент ' . $student->getName() . ' ' . $student->getScholarship() . '<br>';