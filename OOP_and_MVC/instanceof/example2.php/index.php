<?php
	/*
		#7
		Сделайте класс User с публичным свойствами name и surname.
		#8
		Сделайте класс Employee, который будет наследовать от 
		класса User и добавлять свойство salary.
		#9
		Сделайте класс City с публичными свойствами name и population.
		#10
		Создайте 3 объекта класса User, 3 объекта класса Employee,
		3 объекта класса City, и в произвольном порядке запишите их в массив $arr.
		#11
		Переберите циклом массив $arr и выведите на экран столбец свойств name тех
		объектов, которые принадлежат классу User или потомку этого класса.
		#12
		Переберите циклом массив $arr и выведите на экран столбец свойств name тех
		объектов, которые не принадлежат классу User или потомку этого класса.
		#13
		Переберите циклом массив $arr и выведите на экран столбец свойств name тех
		объектов, которые принадлежат именно классу User, то есть не классу City
		и не классу Employee.
	*/
	require_once 'User.php';
	require_once 'Employee.php';
	require_once 'City.php';
	
	$arr = [
			new User('user1', 'surname1'),
			new Employee('employee1', 'surnameEmployee1', 3000),
			new City('cityName1', 200000),
			new User('user2', 'surname2'),
			new Employee('employee2', 'surnameEmployee2', 5000),
			new City('cityName2', 500000),
			new User('user3', 'surname3'),
			new Employee('employee3', 'surnameEmployee3', 6000),
			new City('cityName3', 1000000)
	];
	
	echo 'столбец свойств name тех объектов, которые принадлежат классу User или потомку этого класса<br>';
	foreach($arr as $value){
		if($value instanceof User){
			echo $value->name . '<br>';
		}
	}
	echo '<br>';
	
	echo 'столбец свойств name тех объектов, которые не принадлежат классу User или потомку этого класса<br>';
	foreach($arr as $value){
		if(!$value instanceof User){
			echo $value->name . '<br>';
		}
	}
	echo '<br>';
	
	echo 'свойств name тех объектов, которые принадлежат именно классу User, то есть не классу City
		и не классу Employee.<br>';
	foreach($arr as $value){
		if(!$value instanceof Employee and !$value instanceof City){
			echo $value->name . '<br>';
		}
	}