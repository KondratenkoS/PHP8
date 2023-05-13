<?php
	/*
		Из полученного результата получите третьего работника.
		Через echo выведите на экран его имя, возраст и зарплату.
	*/
	require_once '../mysqli_connect/connection.php';
	
	$query = 'SELECT * FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	echo 'Имя второго работника ' . $data[2]['name'] . ' ему ' . $data[2]['age'] . ' лет,
		  а его зарплата ' . $data[2]['salary'] . ' доларов.';