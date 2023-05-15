<?php
	/*
		Работникам с id больше 2 и меньше 5 включительно поставьте возраст 23.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "UPDATE users SET age = 23 WHERE id > 2 and id <= 5";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);