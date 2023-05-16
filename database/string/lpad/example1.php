<?php
	/*
		Функция LPAD дополняет строку до нужного размера
		добавляя заданные символы в начало строки.
		RPAD тоже самое с права.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT LPAD(text1, 35, '*') as str FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	