<?php
	/*
		Пусть у нас есть юзеры. Каждый юзер имеет отца и мать.
		Распишите структуру хранения.
		
		table parents
		id		name		parents_id
		1		user1		2
		2		user2		3
		3		user3		1
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT parents.name AS user_name, father.name AS father_name, mother.name AS mother_name
			  FROM parents LEFT JOIN parents AS father ON father.id = parents.parents_id
						   LEFT JOIN parents AS mother ON mother.id = parents.parents_id";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);