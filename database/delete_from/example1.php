<?php
	/*
		Удалите юзера с id, равным 7.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "DELETE FROM users WHERE id = 7";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	/*
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/