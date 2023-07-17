<?php
	//api
	require_once 'connection/connection.php';
	/*
	echo $_GET['action'];
	
	if($_GET['action'] === 'all'){
		$query = "SELECT * FROM users";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for($users = []; $row = mysqli_fetch_assoc($result); $users[$row['id']] = $row);
		//$users = mysqli_fetch_assoc($result);
		echo json_encode($users);
	}

	if($_GET['action'] === 'get'){
		$query = "SELECT * FROM users WHERE id = '$_GET[id]'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		//for($users = []; $row = mysqli_fetch_assoc($result); $users[$row['id']] = $row);
		$users = mysqli_fetch_assoc($result);
		echo json_encode($users);
	}
	
	if($_GET['action'] === 'del'){
		$query = "DELETE FROM users WHERE id = '$_GET[id]'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		for($users = []; $row = mysqli_fetch_assoc($result); $users[$row['id']] = $row);
		//$users = mysqli_fetch_assoc($result);
		echo json_encode($users);
	}
	*/
	$arr = json_decode($_POST['json'], true);
	var_dump($arr);

	if($arr['action'] === 'edit'){
		$query = "UPDATE users SET name = 'Hello' WHERE id = '$arr[id]'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	}