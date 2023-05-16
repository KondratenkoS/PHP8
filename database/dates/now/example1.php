<?php
	/*
		Функция NOW возвращает текущий момент времени в формате год-месяц-день часы:минуты:секунды.
		
		Функция CURRENT_DATE возвращает текущую дату в формате год-месяц-день.
		Может использоваться как при выборке, так и при вставке.
		
		Функция CURRENT_TIME возвращает текущее время в формате часы:минуты:секунды.
		Может использоваться как при выборке, так и при вставке.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM date WHERE date <= NOW()";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	