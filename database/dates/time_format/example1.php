<?php
	/*
		Функция TIME_FORMAT преобразует время из формата 
		часы:минуты:секунды в другой удобный нам формат.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, TIME_FORMAT(time, '%Hч %iм %sс') as new_time FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	