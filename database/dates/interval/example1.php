<?php
	/*
		Команда INTERVAL позволяет прибавлять к дате и отнимать от нее определенные промежутки времени.
	*/
	require_once '../mysqli_connect/connection.php'; 
	
	$query = "SELECT *, date + INTERVAL 6 DAY as date FROM date";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	//$data = mysqli_fetch_assoc($result);
	for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	