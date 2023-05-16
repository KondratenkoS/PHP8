<?php
	/*
		Функция CONCAT_WS предназначена для сложения строк при
		выборке из базы данных с использованием разделителя.
		Строками обычно выступают поля таблиц.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT CONCAT_WS(' ', name, age, salary) as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	