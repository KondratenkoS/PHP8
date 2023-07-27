<?php
	/*
		#1
		Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).
		#2
		Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).
		#3
		Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
		#4
		Переберите циклом массив $arr и выведите на экран столбец имен всех работников.
		#5
		Аналогичным образом выведите на экран столбец имен всех студентов.
		#6
		Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму
		стипендий студентов. После цикла выведите эти два числа на экран.
	*/
	require_once 'Employee.php';
	require_once 'Student.php';
	
	$arr = [
			new Employee('Hell1', 1000),
			new Student('Hell2', 2000),
			new Employee('Hell3', 3000),
			new Student('Hell4', 4000),
			new Employee('Hell5', 5000),
			new Student('Hell6', 6000)
	];
	
	foreach($arr as $employee){ // выводим работников
		if($employee instanceof Employee){
			echo 'Имя работника ' . $employee->name . '.<br>';
		}
	}
	
	foreach($arr as $student){ // выводим студентов
		if($student instanceof Student){
			echo 'Имя студента ' . $student->name . '.<br>';
		}
	}
	
	$salary = 0;
	foreach($arr as $employee){ // выводим зарплату всех работников
		if($employee instanceof Employee){
			$salary += $employee->salary;
		}
	}
	echo 'Зарплата работников ' . $salary . '.<br>';
	
	$scholarship = 0;
	foreach($arr as $student){ // выводим зарплату всех студентов
		if($student instanceof Student){
			$scholarship += $student->scholarship;
		}
	}
	echo 'Зарплата работников ' . $scholarship . '.<br>';