<?php
	/*
		Юзеру с id 4 поставьте возраст 35 лет.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "UPDATE users SET age = 35 WHERE id = 4";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	/*
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/