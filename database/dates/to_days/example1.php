<?php
	/*
		Функция TO_DAYS вычисляет столько дней от начала нашей эры соответствует указанной дате.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, TO_DAYS(date) as num FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	