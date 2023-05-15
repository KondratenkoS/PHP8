<?php
	/*
		Добавьте нового юзера 'user7', 26 лет, зарплата 300.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "INSERT INTO users (name, age, salary) VALUES ('user7', 26, 300)";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);