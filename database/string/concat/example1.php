<?php
	/*
		Функция CONCAT предназначена для сложения строк при выборке
		из базы данных. Строками обычно выступают поля таблиц.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT CONCAT(name, age, salary) as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	