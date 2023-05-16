<?php
	/*
		Функция DAYOFYEAR возвращает номер дня года по дате.
		Этот номер может изменяться в диапазоне от 1 до 366.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT DAYOFYEAR(date) as num FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	