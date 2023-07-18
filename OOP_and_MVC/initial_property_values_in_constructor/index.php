<?php
	require_once 'Student.php';
	/*
		#1
		Не подсматривая в мой код реализуйте класс Student.
		#2
		Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый
		курс выполнялась проверка того, что новый курс не будет больше 5.
	*/
	$student = new Student('Hell');
	echo $student->getName().'<br>';
	echo $student->getCourse().'<br>';
	$student->transferToNextCourse($student->getCourse()); // переыводим на следующий курс
	echo $student->getCourse().'<br>';