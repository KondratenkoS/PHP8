<?php
	/*
		Функция LEFT вырезает и возвращает заданное количество
		символов с начала строки.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, LEFT(text1, 3) as text FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	