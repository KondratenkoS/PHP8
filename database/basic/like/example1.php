<?php
	/*
		Давайте выберем те записи, у которых возраст начинается
		с цифры 2, а затем идет еще один символ:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users WHERE age LIKE '_5'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	