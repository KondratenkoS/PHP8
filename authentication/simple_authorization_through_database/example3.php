<?php
	/*
		Модифицируйте код так, чтобы в случае успешной авторизации
		происходил редирект на страницу index.php.
	*/
	require_once '../connection/connection.php';
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
				header('Location: index.php');
			} else {
				echo 'Введите верный логин и пароль';
			}
		}
	}
