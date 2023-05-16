<?php
	/*
		Функция HOUR извлекает часы из времени или даты-времени.
		Функция MINUTE извлекает минуты из времени или даты-времени.
		Функция SECOND извлекает секунды из времени или даты-времени.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT time, HOUR(time) as h FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	