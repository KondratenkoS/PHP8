<?php
	/*
		Функция INSTR осуществляет поиск подстроки в строке,
		возвращает позицию ее первого символа. Учтите, что
		нумерация символов начинается с 1.

		отличие от функции POSITION функция INSTR имеет
		обратный порядок параметров.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, INSTR(text1, 'длинный') as pos FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	