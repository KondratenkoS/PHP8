<?php
	/*
		Функция LOCATE осуществляет поиск подстроки в строке,
		возвращает позицию ее первого символа. Учтите, что 
		нумерация символов начинается с 1.

		В отличие от функции POSITION функция LOCATE может 
		начинать поиск не с начала строки, а с определенного места.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT LOCATE('текст', text1) as text FROM texts";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	