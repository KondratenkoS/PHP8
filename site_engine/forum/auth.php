<?php
	require_once 'connection/connection.php';

	$login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
	$pass = password_hash(htmlspecialchars(trim($_POST['pass']), ENT_QUOTES), PASSWORD_DEFAULT);

	$query  = "SELECT * from USERS where login = '$login'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	var_dump($data);
	
	//header('Location: index.php');
	//die();