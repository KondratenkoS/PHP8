<?php
	/*
		Команда GROUP BY позволяет группировать результаты при выборке из базы данных.
		К сгруппированным результатам можно применять любые функции (смотрите примеры).
		
		Команда HAVING позволяет фильтровать результат группировки,
		сделанной с помощью команды GROUP BY.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	//$query = "SELECT age, SUM(salary) as sum FROM users GROUP BY age";
	$query = "SELECT age, SUM(salary) as sum FROM users GROUP BY age HAVING sum >= 500";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	