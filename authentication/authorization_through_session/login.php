<?php
	/*
		Пусть на нашем сайте, кроме страницы login.php, есть еще и 
		страницы 1.php, 2.php и 3.php. Сделайте так, чтобы к этим 
		страницам мог получить доступ только авторизованный пользователь.
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
	<?php } else {
		if(!empty($_POST['name']) and !empty($_POST['pass'])){
			$name = $_POST['name'];
			$pass = $_POST['pass'];
			
			$query = "SELECT * FROM auth WHERE name = '$name' AND pass = '$pass'";
			$result = mysqli_query($link, $query);
			$data = mysqli_fetch_assoc($result);
			
			if(!empty($data)){
				$_SESSION['auth'] = true;
				$_SESSION['login'] = $name;
				header('Location: index.php');
				die();
			} else {
				echo 'Введите верный логин и пароль';
			}
		}
	}