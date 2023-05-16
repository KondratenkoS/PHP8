<?php
	/*
		Функция MID вырезает и возвращает заданное количество символов из строки.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT MID(text1, 4, 6) as string FROM texts';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	