<?php
	/*
		Функция ELT выбирает одно из полей по его номеру (нумерация полей с единицы).
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT id, ELT(2, text1, text2) as str FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	