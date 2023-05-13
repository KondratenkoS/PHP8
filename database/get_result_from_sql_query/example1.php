<?php
	/*
		С помощью описанного цикла получите и выведите через
		var_dump на экран массив всех работников.
	*/
	require_once '../mysqli_connect/connection.php';
	
	$query = 'SELECT * FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	print_r($data);