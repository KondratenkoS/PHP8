<?php
	require_once 'User.php';
	require_once 'Student.php';
	/*
		Скопируйте мой код класса User. Самостоятельно не подсматривая в мой код 
		реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear.
	*/
	$student = new Student;
	$student->setName('Hell');
	$student->setAge(34);
	$student->setCourse(3);
	$student->addOneYear();
	
	echo $student->getName() . '<br>' . $student->getAge() . '<br>' . $student->getCourse();
	