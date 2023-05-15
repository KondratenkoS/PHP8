<?php
	/*
		Всем, у кого зарплата 500, сделайте ее 700.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "UPDATE users SET salary = 700 WHERE salary = 500";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	/*
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/