<?php
	/*
		Функция SUBSTRING вырезает и возвращает заданное 
		количество символов из строки.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT SUBSTRING(text1, 5) as string FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	