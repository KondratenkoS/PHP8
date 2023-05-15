<?php
	/*
		Подсчитайте всех юзеров с зарплатой 300.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT COUNT(*) as count FROM users WHERE salary = 300";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	