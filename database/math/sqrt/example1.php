<?php
	/*
		Функция SQRT находит квадратный корень из числа.
		
		Давайте при выборке из таблицы извлечем корень из числа и запишем его в колонку sqrt:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT *, SQRT(salary) as sqrt FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	