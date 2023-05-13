<?php
	/*
		Выберите юзеров в возрасте от 25 (не включительно)
		до 28 лет (включительно).
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE age > 25 and age <= 28';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);