<?php
	/*
		#1
		Сделайте класс Test с публичными свойствами prop1 и prop2, а также 
		с приватными свойствами prop3 и prop4. Создайте объект этого класса.
		С помощью функции get_object_vars получите массив свойств созданного объекта.
	*/
	require_once 'Test.php';
	
	$test = new Test;
	
	echo '<pre>';
		print_r(get_object_vars($test));
	echo '</pre>';