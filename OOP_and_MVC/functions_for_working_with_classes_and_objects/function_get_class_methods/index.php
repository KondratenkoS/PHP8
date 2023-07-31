<?php
	/*
		#3
		Сделайте класс Test с методами method1, method2 и method3. С помощью функции
		get_class_methods получите массив названий методов класса Test.
		#4
		Создайте объект класса Test, запишите его в переменную $test. С помощью функции
		get_class_methods получите массив названий методов объекта. Переберите этот 
		массив циклом и в этом цикле вызовите каждый метод объекта.
	*/
	require_once 'Test.php';
	
	echo '<pre>'; 
		print_r(get_class_methods('Test'));
	echo '</pre>';
	
	$test = new Test;
	$methods = get_class_methods($test);
	foreach($methods as $method){
		echo $test->$method();
	}