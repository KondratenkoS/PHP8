<?php
	/*
		Функция SIGN определяет знак числа. Если число больше нуля
		- функция вернет 1, если меньше нуля - вернет -1,
		а если равно нулю - вернет 0.
		
		Давайте определим знак баланса на зарплатной карте
		и запишем его в поле sign:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT SIGN(salary) as salary FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	