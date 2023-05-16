<?php
	/*
		Функция GROUP_CONCAT складывает (как строки) содержимое
		одного поля из разных строк, вставляя между ними разделитель 
		(по умолчанию это запятая). К примеру, можно получить список 
		всех выбранных имен через запятую или другой разделитель.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT GROUP_CONCAT(name SEPARATOR ' ') as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	