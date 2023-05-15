<?php
	/*
		Достаньте всех юзеров и отсортируйте их по возрастанию зарплаты.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users ORDER BY salary";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	