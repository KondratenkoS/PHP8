<?php
	/*
		Функция MOD находит остаток от деления одного числа на другое.
		Вместо MOD можно использовать операцию %, которая делает то же самое.
		
		В данном примере находится остаток от деления столбца salary на 3:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT *, MOD(salary, 3) as mod FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	