<?php
	/*
		Отсортируйте юзеров по возрастанию зарплаты и получите
		первых 3 работника из результата сортировки.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users ORDER BY salary LIMIT 3';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	