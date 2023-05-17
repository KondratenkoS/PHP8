<?php
	/*
		Пусть товары принадлежат определенной подкатегории,
		а подкатегории принадлежат определенной категории.
		Распишите структуру хранения.
		
		table category
		id		name_category
		1		category1
		2		category2
		
		table subcategory
		id		name_subcategory	id_category
		1		subcategory1		1
		2		subcategory2		1
		3		subcategory3		2
		
		table product
		id		name_product	price	quantity	id_subcategory
		1		product1		100		23			1
		2		product2		200		12			1
		3		product3		300		45			2
		4		product4		400		23			2
		5		product5		600		56			3
		6		product6		800		12			3
	*/