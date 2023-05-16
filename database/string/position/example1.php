<?php
	/*
		Функция POSITION осуществляет поиск подстроки в строке,
		возвращает позицию ее первого символа. Учтите, что
		нумерация символов начинается с 1.
		
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT POSITION('user2' IN name) as name FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	