<?php
	/*
		Пусть у нас есть категории. Каждая категория может 
		принадлежать родительской категории, та в свою очередь
		своей родительской и так далее. Распишите структуру хранения.
		
		table category
		id		name		subcategory_id
		1		category1	2
		2		category2	3
		3		category3	1
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT category.name AS category_name, subcategory.name AS subcategory_name, subsubcategory.name AS subsubcategory_name
				FROM category LEFT JOIN category AS subcategory ON subcategory.id = category.subcategory_id
							  LEFT JOIN subcategory AS subsubcategory ON subsubcategory.id = category.subcategory_id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);