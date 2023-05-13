<?php
	/*
		Из полученного результата получите первого работника.
		Через echo выведите на экран его имя.
	*/
	require_once '../mysqli_connect/connection.php';
	
	$query = 'SELECT * FROM users';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	echo $data[0]['name'];