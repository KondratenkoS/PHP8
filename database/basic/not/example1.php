<?php
	/*
		Давайте выберем из таблицы записи с id, НЕ равным 1, 3 и 5:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users WHERE id NOT IN (1, 3, 5)";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	