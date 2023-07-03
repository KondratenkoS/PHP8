<?php
	session_start();
	require_once 'connection/connection.php';
	require_once 'validation.php';
	
	$login = validateLogin($_POST['login']);
	$full_name = validateName($_POST['full_name']);
	$email = validateEmail($_POST['email']);
	$pass = validatePass($_POST['pass']);
	$pass_confirm = $_POST['pass_confirm'];
	
	if($pass === $pass_confirm){
		$pass = password_hash($pass, PASSWORD_DEFAULT);
		$path = 'images/' . time() . $_FILES['avatar']['name'];
		
		if(!move_uploaded_file($_FILES['avatar']['tmp_name'], $path)){
			$_SESSION['errorAvatar'] = 'Ошибка при загрузке картинки';
			header('Location: /php8/site_engine/forum/registration_form.php');
			die();
		}
		
		$query = "SELECT * FROM `users` WHERE `login` = '$login'";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
	
		if(mysqli_num_rows($result) === 0){
			$query = "INSERT INTO `users` (`id`, `login`, `full_name`, `email`, `pass`, `avatar`) 
				      VALUES (NULL, '$login', '$full_name', '$email', '$pass', '$path')";
			mysqli_query($link, $query) or die(mysqli_error($link));
			
			$_SESSION['auth'] = 'true';
			header('Location: /php8/site_engine/forum/auth_form.php');
			die();
		} else {
			$_SESSION['errorLogin'] = "Данный логин занят";
			header('Location: /php8/site_engine/forum/registration_form.php');
			die();
		}
	} else {
		$_SESSION['errorPass'] = 'Пароль должен быть латинскими буквами, и длинной от 4-ти до 12-ти символов.';
		header('Location: /php8/site_engine/forum/registration_form.php');
		die();
	}
?>