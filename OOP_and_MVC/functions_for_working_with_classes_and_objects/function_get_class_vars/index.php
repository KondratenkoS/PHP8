<?php
	/*
		#1
		Сделайте класс Test с публичными свойствами prop1 и prop2, а также
		с приватными свойствами prop3 и prop4.
		#2
		Вызовите функцию get_class_vars снаружи класса Test.
		Выведите массив доступных свойств.
		#3
		Вызовите функцию get_class_vars внутри класса Test 
		(например, в конструкторе). Выведите массив доступных свойств.
	*/
	require_once 'Test.php';
	
	echo '<pre>';
		print_r(get_class_vars('Test'));
	echo '</pre>';
	
	$test = new Test();
	
	echo '<pre>';
		print_r($test);
	echo '</pre>';