<?php
	/*
		В данном примере дробная зарплата округляется до целых в меньшую сторону:
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, FLOOR(salary) as floor FROM users";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	