<?php
	/*
		Пусть товар может принадлежать нескольким категориям. Распишите структуру хранения.
		
		table category
		id		name
		1		category1
		2		category2
		3		category3
		
		table subcategory
		id		name
		1		subcategory1
		2		subcategory2
		3		subcategory3
		4		subcategory4
		
		table product
		id		name			price	quantity
		1		product1		100		23
		2		product2		200		12
		3		product3		300		45
		4		product4		400		23
		5		product5		600		56
		6		product6		800		12

		table connections
		id		product_id		subcategory_id		category_id
		1		1				1					1
		2		2				3					1
		3		3				2					2
		4		4				4					3
		5		5				1					3
		6		6				3					2
	*/