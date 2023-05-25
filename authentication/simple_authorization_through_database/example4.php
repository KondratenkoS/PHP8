<?php
	/*
		Модифицируйте код так, чтобы на странице index.php выводилось
		сообщение об успешной авторизации. Решите задачу через 
		флеш-сообщения на сессиях.
	*/
	require_once '../connection/connection.php';
	session_start();
	/*
	$query = "SELECT * FROM auth"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/
	if(empty($_POST)) { ?>
		<form action="" method="POST">
			<p><input name="name"> Введите логин</p>
			<p><input name="pass"> Введите пароль</p>
			<p><input type="submit"></p>
		</form>
	<?php	} else {
		if(!empty($_POST['name']) and !empty($_POST['pass'])){
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			
			$query = "SELECT * FROM auth WHERE name = '$name' AND pass = '$pass'";
			$result = mysqli_query($link, $query);
			$data = mysqli_fetch_assoc($result);
			
			if(!empty($data)){
				if(isset($_SESSION)){
					$_SESSION['flash'] = 'Это страница - index.php. Вы авторизированы';
					header('Location: index.php');
					die();
				}
			} else {
				echo 'Введите верный логин и пароль';
			}
		}
	}
