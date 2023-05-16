<?php
	/*
		Функция FIELD ищет поле, которое содержит в себе заданный текст,
		и возвращает его номер (нумерация с единицы). 
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, FIELD('не', text1, text2) as str FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	