<?php
	/*
		#1
		Сделайте класс ChildClass наследующий от ParentClass. С помощью функции
		get_parent_class выведите на экран родителя класса ChildClass.
	*/
	require_once 'ChildClass.php';
	require_once 'ParentClass.php';
	$childClass = new ChildClass;
	echo get_parent_class('ChildClass');