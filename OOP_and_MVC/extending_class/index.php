<?php
	/*
		#1
		Не подсматривая в мой код реализуйте такие же классы User, Employee.
		#2
		Не подсматривая в мой код реализуйте такой же класс Student, наследующий от класса User.
		#3
		Сделайте класс Programmer, который будет наследовать от класса Employee.
		Пусть новый класс имеет свойство langs, в котором будет хранится массив языков,
		которыми владеет программист. Сделайте также геттер и сеттер для этого свойства.
		#4
		Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
		Пусть новый класс добавляет следующие свойства: водительский стаж, категория
		вождения (A, B, C, D), а также геттеры и сеттеры к ним.
	*/
	require_once 'User.php';
	require_once 'Employe.php';
	require_once 'Student.php';
	require_once 'Programmer.php';
	require_once 'Driver.php';
	
	?><label><b>объект класса User</b><br></label><?php
	$user = new User;
	$user->setName('Hell');
	$user->setAge(34);
	echo $user->getName() . ' ' . $user->getAge() . '<br>';
	
	?><label><b>объект класса Employe рассширеного классом User</b><br></label><?php
	$employe = new Employe;
	$employe->setName('Hell2');
	$employe->setAge(34);
	$employe->setSalary(100500);
	echo $employe->getName() . ' ' . $employe->getAge() . ' ' . $employe->getSalary() . '<br>';
	
	?><label><b>объект класса Student рассширеного классом User</b><br></label><?php
	$student = new Student;
	$student->setName('Hell3');
	$student->setAge(34);
	$student->setCourse(4);
	echo $student->getName() . ' ' . $student->getAge() . ' ' . $student->getCourse() . '<br>';
	
	?><label><b>объект класса Programmer рассширеного классом Employe</b><br></label><?php
	$programmer = new Programmer;
	$programmer->setName('Hell4');
	$programmer->setAge(34);
	$programmer->setSalary(102030);
	echo $programmer->getName() . ' ' . $programmer->getAge() . ' ' . $programmer->getSalary() . '<br>';
	foreach($programmer->getLang() as $value){
		echo $value . '<br>';
	}
	$programmer->setLang('Java'); // добавляем язык
	foreach($programmer->getLang() as $value){
		echo $value . '<br>';
	}
	
	?><label><b>объект класса Driver рассширеного классом Employe</b><br></label><?php
	$driver = new Driver;
	$driver->setName('Hell5');
	$driver->setAge(34);
	$driver->setSalary(102030);
	$driver->setDrivingExp('2 years');
	echo $driver->getName() . '<br>' . $driver->getAge() . '<br>' . $driver->getSalary() . '<br>' . $driver->getDrivingExp() . '<br>';
	foreach($driver->getDrivingCat() as $value){
		echo $value . '<br>';
	}