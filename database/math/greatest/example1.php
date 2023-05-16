<?php
	/*
		Функция GREATEST выбирает максимальное из значений.
		Значениями могут выступать поля, а также строки и числа.
		
		выбираем найбольшую зарплату
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT salary, GREATEST(id, age) as salary FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	