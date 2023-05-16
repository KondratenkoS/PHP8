<?php
	/*
		Функция REVERSE переворачивает заданную строку так,
		чтобы ее символы шли в обратном порядке.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT REVERSE(text1) as str FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	