<?php
	/*
		Реализуйте авторизацию. Сделайте так, чтобы, если пользователь
		прошел авторизацию - выводилось сообщение об этом, а если не 
		прошел - то сообщение о том, что введенный логин или пароль 
		вбиты не правильно.
	*/
	require_once '../connection/connection.php';
	/*
	$query = "SELECT * FROM auth"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	var_dump($data);
	*/
?>
	<form action="" method="POST">
		<p><input name="name"> Введите логин</p>
		<p><input name="pass"> Введите пароль</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST['name']) and !empty($_POST['pass'])){
		$name = $_POST['name'];
		$pass = $_POST['pass'];
		
		$query = "SELECT * FROM auth WHERE name = '$name' AND pass = '$pass'";
		$result = mysqli_query($link, $query);
		$data = mysqli_fetch_assoc($result);
		
		if(!empty($data)){
			echo 'Вы авторизированы';
		} else {
			echo 'Введите верный логин и пароль';
		}
	}
