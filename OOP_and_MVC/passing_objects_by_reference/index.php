<?php
	require_once 'Product.php';
	/*
		#1
		Сделайте класс Product, в котором будут следующие свойства: name, price.
		#2
		Создайте объект класса Product, запишите его в переменную $product1.
		#3
		Присвойте значение переменной $product1 в переменную $product2. 
		Проверьте то, что обе переменные ссылаются на один и тот же объект.
	*/
	$product1 = new Product('Hell', 100500);
	
	$product2 = $product1;
	
	echo $product1->getName() . ' ' . $product1->getPrice() . '<br>';
	echo $product2->getName() . ' ' . $product2->getPrice() . '<br>';