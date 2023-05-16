<?php
	/*
		Функция WEEKDAY возвращает номер дня недели по дате.
		Неделя начинается с понедельника, и он будет иметь 
		номер 0. Соответственно 1 - вторник, 2 - среда и так далее.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT WEEKDAY(date) as week FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	