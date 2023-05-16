<?php
	/*
		Функция DATE извлекает дату из даты-времени в формате год-месяц-день.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT DATE(date) as date FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	