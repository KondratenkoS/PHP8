<?php
	/*
		Выберите всех юзеров в возрасте от 23 лет (включительно)
		до 27 лет (не включительно) или с зарплатой 1000.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE salary = 1000 OR (age >= 23 AND age < 27)';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);