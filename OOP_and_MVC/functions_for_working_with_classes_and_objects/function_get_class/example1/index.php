<?php
	/*
		#1
		Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class
		и узнайте имя класса, которому принадлежит объект.
		
	*/
	require_once 'Test1.php';
	require_once 'Test2.php';
	
	$test1 = new Test1;
	$test2 = new Test2;
	
	echo get_class($test1) . '<br>';
	echo get_class($test2) . '<br>';