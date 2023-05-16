<?php
	/*
		Функция DAYOFWEEK возвращает номер дня недели по дате.
		Неделя начинается с воскресенья, и этот день будет иметь
		номер 1. Соответственно 2 - понедельник, 3 - вторник и так далее.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT DAYOFWEEK(date) as day FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	