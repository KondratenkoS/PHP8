<?php
	/*
		Получите первых 4 юзера.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users LIMIT 4";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	