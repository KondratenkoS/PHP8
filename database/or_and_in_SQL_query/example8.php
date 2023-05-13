<?php
	/*
		Выберите всех юзеров в возрасте от 23 лет до 27 
		лет или с зарплатой от 400 до 1000.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE (age > 23 and age < 27 ) OR
			 (salary > 400 AND salary < 1000)';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);