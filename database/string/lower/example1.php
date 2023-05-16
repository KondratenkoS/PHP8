<?php
	/*
		Функция LOWER(LCASE) переводит строку в нижний регистр 
		(то есть из больших букв делает маленькие).
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT LOWER(name) as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	