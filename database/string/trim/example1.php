<?php
	/*
		Функция TRIM обрезает пробелы по краям строки.
		Функция LTRIM обрезает пробелы, которые стоят в начале строки.
		Функция RTRIM обрезает пробелы, которые стоят в конце строки.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT TRIM(name) as str FROM users";
	//$query = "SELECT LTRIM(name) as str FROM users";
	//$query = "SELECT RTRIM(name) as str FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	