<?php
	/*
		Давайте найдем максимальное значение зарплаты в таблице:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT MAX(salary) as max FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	