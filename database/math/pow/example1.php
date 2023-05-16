<?php
	/*
		Функция POW возводит число в заданную степень.
		
		В данном примере содержимое поля salary возводится во вторую степень:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT *, POW(salary, 2) as pow FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	