<?php
	/*
		Функция DATE_FORMAT преобразует дату из формата год-месяц-день
		или формата год-месяц-день часы:минуты:секунды в другой удобный нам формат.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, DATE_FORMAT(date, '%d.%m.%Y') as new_date FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	