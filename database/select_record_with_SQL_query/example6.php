<?php
	/*
		Выберите юзеров с зарплатой НЕ равной 500.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE salary != 500';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);