<?php
	/*
		#1
		Сделайте класс ChildClass наследующий от ParentClass, который в свою
		очередь наследует от GrandParentClass
		#2
		С помощью функции is_subclass_of проверьте, является ли класс 
		ChildClass потомком GrandParentClass.
		#3
		С помощью функции is_subclass_of проверьте, является ли класс
		ParentClass потомком GrandParentClass.
		#4
		С помощью функции is_subclass_of проверьте, является ли класс
		ChildClass потомком ParentClass.
	*/
	require_once 'GrandParentClass.php';
	require_once 'ParentClass.php';
	require_once 'ChildClass.php';
	
	// является ли класс ChildClass потомком GrandParentClass.
	if(is_subclass_of('ChildClass', 'GrandParentClass')){
		echo 'Да является<br>';
	} else {
		echo 'Не является<br>';
	}
	
	// является ли класс ParentClass потомком GrandParentClass.
	if(is_subclass_of('ParentClass', 'GrandParentClass')){
		echo 'Да является<br>';
	} else {
		echo 'Не является<br>';
	}
	
	// является ли класс ChildClass потомком ParentClass.
	if(is_subclass_of('ChildClass', 'ParentClass')){
		echo 'Да является<br>';
	} else {
		echo 'Не является<br>';
	}