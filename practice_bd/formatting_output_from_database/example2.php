<?php
	/*
		выберем из таблицы записи с id от 2-х до 4-х 
		включительно и чтобы при этом зарплата была 500:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT * FROM users WHERE id BETWEEN 2 AND 4 AND salary = 500";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	