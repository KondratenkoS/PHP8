<?php
	/*
		#1
		Пусть у вас есть класс Test1 и нет класса Test2. Проверьте, что 
		выведет функция class_exists для класса Test1 и для класса Test2.
		#2
		Пусть GET параметром в адресную строку передается название класса.
		Проверьте, существует ли такой класс. Выведите соответствующее
		сообщение на экран.
	*/
	require_once 'Test1.php';
	
	echo class_exists('Test1'); // выведет 1 если Test1(класс существует), и 0 если Test2(класс не существует)
	
	//?class=Test1 - добавить в адресную строку для гет запроса
	if(class_exists($_GET['class'])){
		echo 'Класс существует';
	} else {
		echo 'Класс не существует';
	}