<?php
	require_once 'Product.php';
	require_once 'Cart.php';
	/*
		#1
		Сделайте класс Product, в котором будут приватные свойства name, price и quantity.
		Пусть все эти свойства будут доступны только для чтения.
		#2
		Добавьте в класс Product метод getCost, который будет находить полную стоимость
		продукта (сумма умножить на количество).
		#3
		Сделайте класс Cart. Данный класс будет хранить список продуктов (объектов класса Product)
		в виде массива. Пусть продукты хранятся в свойстве products.
		#4
		Реализуйте в классе Cart метод add для добавления продуктов.
		#5
		Реализуйте в классе Cart метод remove для удаления продуктов.
		Метод должен принимать параметром название удаляемого продукта.
		#6
		Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.
		#7
		Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов
		(то есть сумму свойств quantity всех продуктов).
		#8
		Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов
		(суммарная стоимость делить на количество всех продуктов).
	*/
	$cart = new Cart;
	$cart->add(new Product('Meat', 30, 23));
	$cart->add(new Product('Cake', 2, 14));
	$cart->add(new Product('Coffe', 24, 50));
	//print_r($cart);
	foreach($cart->getProducts() as $value){
		echo $value->getName() . '<br>';
	}
	
	$cart->remove('Cake'); // удаляем из массива
	
	foreach($cart->getProducts() as $value){
		echo $value->getName() . '<br>';
	}
	
	echo $cart->getTotalCost() . '<br>';
	echo $cart->getTotalQuantity() . '<br>';
	echo $cart->getAvgPrice() . '<br>';