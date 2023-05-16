<?php
	/*
		Делаем из отрицательной зарплаты, положительную
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT ABS(salary) as abs FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	