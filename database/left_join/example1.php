<?php
	/*
		Пусть у вас есть таблица с товарами и таблица с их категориями.
		Напишите запрос, который достанет названия товаров вместе с их категориями.
		table product
		id		name_product	price	quantity	id_category
		1		product1		100		23			2
		2		product2		200		12			1
		3		product3		300		45			1
		
		table category
		id		name_category
		1		category1
		2		category2
	*/
	
	$query = "SELECT product.name_product, category.name_category 
			  FROM product LEFT JOIN category ON category.id = product.id_category";
	
	