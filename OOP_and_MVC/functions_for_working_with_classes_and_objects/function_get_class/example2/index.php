<?php
	/*
		#1
		Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class
		и узнайте имя класса, которому принадлежит объект.
		#2
		Сделайте два класса: Test1 и Test2. Пусть оба класса имеют свойство name. 
		Создайте некоторое количество объектов этих классов и запишите в массив $arr
		в произвольном порядке. Переберите этот массив циклом и для каждого объекта
		выведите значение его свойства name и имя класса, которому принадлежит объект.
	*/
	require_once 'Test1.php';
	require_once 'Test2.php';
	
	//$test1 = new Test1;
	//$test2 = new Test2;
	
	//echo get_class($test1) . '<br>';
	//echo get_class($test2) . '<br>';
	
	$arr = [
			new Test1('Name1'),
			new Test2('Name2'),
			new Test1('Name3'),
			new Test2('Name4'),
			new Test1('Name5'),
			new Test2('Name6')
	];
	
	foreach($arr as $elem){
		echo 'Имя класса ' . get_class($elem) . ', ' . 'Имя свойства ' . $elem->name . ';<br>';
	}