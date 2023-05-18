<?php
	/*
		Пусть у нас есть юзеры. Каждый юзер имеет отца и мать.
		Распишите структуру хранения.
		
		table users
		id 		name
		1		user1
		2		user2
		3		user3
		
		table parents
		id 		mother_name		father_name		parent_id
		1		mother1			father1			2
		2		mother3			father3			1
		3		mother2			father2			3
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);