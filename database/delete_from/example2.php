<?php
	/*
		Удалите всех юзеров, у которых возраст 23 года.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = 'DELETE FROM users WHERE age = 23';
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	/*
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/