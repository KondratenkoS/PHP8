<?php
	/*
		Функция MONTH извлекает номер месяца из даты.
		Дата может быть в формате date или datetime.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, MONTH(date) as date FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	