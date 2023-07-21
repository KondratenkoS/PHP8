<?php
	require_once 'User.php';
	require_once 'Student.php';
	/*
		#1
		Модифицируйте код класса User так, чтобы в методе setName выполнялась
		проверка того, что длина имени более 3-х символов.
		#2
		Добавьте в класс Student метод setName, в котором будет выполняться 
		проверка того, что длина имени более 3-х символов и менее 10 символов.
		Пусть этот метод использует метод setName своего родителя,
		чтобы выполнить часть проверки.
	*/
	
	$user = new User;
	$student = new Student;
	
	$user->setName('Hell');
	echo $user->getName() . '<br>';
	
	$student->setName('1234');
	echo $student->getName() . '<br>';