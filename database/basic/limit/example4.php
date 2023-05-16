<?php
	/*
		Отсортируйте юзеров по убыванию зарплаты и получите
		первых 3 юзера из результата сортировки.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users ORDER BY salary DESC LIMIT 3';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	