<?php
	session_start();
	require_once '../connection/connection.php';
	
	if(!empty($_SESSION['auth'])){

		$query = "UPDATE auth SET status = 'user' WHERE id = '$_GET[id]'";
		mysqli_query($link, $query) or die(mysqli_error($link));
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		header('Location: /php8/authentication/profile/admin.php');
		die();
	}