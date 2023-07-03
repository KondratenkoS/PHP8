<?php
	session_start();
	require_once 'connection/connection.php';
	
	$login = $_POST['login'];
	$pass = $_POST['pass'];
	
	$query = "SELECT * FROM `users` WHERE `login` = '$login'";
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	
	if(password_verify($pass, $data['pass'])){
		$_SESSION['auth'] = 'true';
		$_SESSION['user'] = [
			'id' => $data['id'],
			'login' => $data['login'],
			'full_name' => $data['full_name'],
			'avatar' => $data['avatar'],
			'email' => $data['email'],
		];
		
		header('Location: /php8/site_engine/forum/layout.php');
		die();
	} else {
		$_SESSION['errorAuth'] = "Неверные логин или пароль";
		header('Location: /php8/site_engine/forum/auth_form.php');
		die();
	}