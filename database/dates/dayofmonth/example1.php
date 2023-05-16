<?php
	/*
		Функция DAYOFMONTH извлекает номер дня месяца из даты.
		Дата может быть в формате date или datetime.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, DAYOFMONTH(date) as day FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	