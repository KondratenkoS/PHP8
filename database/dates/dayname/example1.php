<?php
	/*
		Функция DAYNAME возвращает название дня недели по-английски.
		Функция MONTHNAME возвращает название месяца по-английски.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	//$query = "SELECT DAYNAME(date) as day FROM date";
	$query = "SELECT MONTHNAME(date) as day FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	