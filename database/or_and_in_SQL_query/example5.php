<?php
	/*
		Выберите всех юзеров в возрасте 27 лет или с зарплатой 1000.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE salary = 1000 OR age = 27';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);