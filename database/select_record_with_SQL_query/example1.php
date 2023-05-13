<?php
	/*
		Выберите юзера с id, равным 3.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'SELECT * FROM users WHERE id = 3';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
	$row = mysqli_fetch_assoc($result);
	var_dump($row);