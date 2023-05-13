<?php
	/*
		Из полученного результата получите второго работника.
		Через echo выведите на экран его имя и возраст.
	*/
	require_once '../mysqli_connect/connection.php';
	
	$query = 'SELECT * FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	echo 'Имя второго работника ' . $data[1]['name'] . ' ему ' . $data[1]['age'] . ' лет.';