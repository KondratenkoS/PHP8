<?php
	/*
		Функция UPPER(UCASE) переводит строку в верхний регистр 
		(то есть из маленьких букв делает большие).
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT UPPER(name) as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	