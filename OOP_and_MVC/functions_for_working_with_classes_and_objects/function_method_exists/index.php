<?php
	/*
		#1
		Сделайте класс Test с методом method1 и без метода method2. Проверьте,
		что выведет функция method_exists для метода method1 и для метода method2.
		#2
		Пусть GET параметрами в адресную строку передаются название класса и его метод.
		Проверьте, существует ли такой класс. Если существует - проверьте существование
		переданного метода. Если и метод существует - создайте объект данного класса, 
		вызовите указанный метод и выведите результат его работы на экран.
	*/
	require_once 'Test.php';
	$test = new Test;
	
	//true на method1, так как он существует, 
	//false на method2, так как он не существует.
	var_dump(method_exists('Test', 'method1')); 
	
	//GET запрос в адресную строку - ?class=Test&method=method1
	$class = $_GET['class'];
	$method = $_GET['method'];
	
	if(class_exists($class) || method_exists($method)){
		$test = new $class;
		echo $test->$method();
	}
	