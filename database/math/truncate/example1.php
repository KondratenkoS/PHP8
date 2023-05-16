<?php
	/*
		В данном примере зарплата усекается до двух знаков после точки:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, TRUNCATE(salary, 2) as trunc FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	