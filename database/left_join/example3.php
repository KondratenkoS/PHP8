<?php
	/*
		Напишите запрос, который достанет товары, 
		вместе с их подкатегориями и категориями.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SElECT product.name_product, subcategory.name_subcategory,
			  category.name_category FROM product LEFT JOIN subcategory ON product.id_subcategory = subcategory.id
			  LEFT JOIN category ON subcategory.id_category = category.id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result); // для удобства читания вывожу 1 результат
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); // массив данных
	var_dump($data);