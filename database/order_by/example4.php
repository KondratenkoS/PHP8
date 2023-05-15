<?php
	/*
		Достаньте юзеров с зарплатой 500 и отсортируйте их по возрасту.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE salary = 500 ORDER BY age';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	