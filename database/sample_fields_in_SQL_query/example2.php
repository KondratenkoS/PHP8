<?php
	/*
		Выберите из таблицы users имена всех работников.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT name FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);