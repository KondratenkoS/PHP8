<?php
	/*
		Выведите полученные данные в виде списка ul так,
		чтобы в каждой li вначале стояло имя продукта,
		а после двоеточия через запятую перечислялись 
		категории этого продукта. Примерно так:

		<ul>
			<li>product1: category1, category2, category3</li>
			<li>product2: category1, category3</li>
			<li>product3: category1</li>
		</ul>
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT product.name AS product_name,
					 category.name AS category_name,
					 subcategory.name AS subcategory_name
			  FROM product LEFT JOIN conections ON conections.product_id = product.id
						   LEFT JOIN category ON conections.category_id = category.id
						   LEFT JOIN subcategory ON conections.subcategory_id = subcategory.id";
					 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result); // для удобства читания вывожу 1 результат
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row); // массив данных
	
	$data = [];
	foreach($result as $elem){
		$data[$elem['product_name']] = array($elem['category_name'], 
											 $elem['subcategory_name']);
	}
	//var_dump($data);
	echo '<ul>';
		foreach($data as $key => $value){
			echo '<li>' . $key . ': ' . implode(', ', $value) . '</li>';
		}
	echo '</ul>';