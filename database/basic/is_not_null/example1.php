<?php
	/*
		Давайте выберем записи, у которых зарплата не равна NULL:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users WHERE salary IS NOT NULL";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	