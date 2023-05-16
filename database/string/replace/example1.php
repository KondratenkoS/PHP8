<?php
	/*
		Функция REPLACE позволяет производить поиск и 
		замену одних частей строки на другие.
		
		заменяем значение зарплаты
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT REPLACE(salary, 400, 1200) as salary FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	