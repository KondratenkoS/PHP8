<?php
	/*
		#1
		Сделайте класс ChildClass наследующий от ParentClass. Создайте объект класса
		ChildClass, запишите его в переменную $obj.
		#2
		С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass.
		#3
		С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass.
	*/
	require_once 'ParentClass.php';
	require_once 'ChildClass.php';
	
	$obj = new ChildClass;
	// принадлежит ли объект $obj классу ChildClass.
	if(is_a($obj, 'ChildClass')){
		echo 'Принадлежит<br>';
	} else {
		echo 'Не принадлежит<br>';
	}
	
	// принадлежит ли объект $obj классу ParentClass.
	if(is_a($obj, 'ParentClass')){
		echo 'Принадлежит<br>';
	} else {
		echo 'Не принадлежит<br>';
	}