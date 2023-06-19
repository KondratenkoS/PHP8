<?php
	require_once 'connection/connection.php';

	$login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
	$name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);
	$pass = password_hash(htmlspecialchars(trim($_POST['pass']), ENT_QUOTES), PASSWORD_DEFAULT);
	
	if(mb_strlen($login) < 4 || mb_strlen($login) > 12){
		echo 'Длинна логина должна быть не менее 4-х, но и не более 12 символов';
	} else if(mb_strlen($name) < 4 || mb_strlen($name) > 12){
		echo 'Длинна имени должна быть не менее 4-х, но и не более 12 символов';
	} else if(mb_strlen($pass) < 4 || mb_strlen($pass) > 12){
		echo 'Длинна пароля должна быть не менее 4-х, но и не более 12 символов';
	}
	
	$query  = "INSERT INTO users SET login='$login', name='$name', pass='$pass'";
		mysqli_query($link, $query) or die(mysqli_error($link));
	
	header('Location: index.php');
	die();