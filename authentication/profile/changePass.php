<?php
	session_start();
	require_once '../connection/connection.php';
	
	if(!empty($_SESSION['auth'])){
	$id = $_SESSION['id'];
	$query = "SELECT pass FROM auth WHERE id = '$id'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	}
?>
	<form action="" method="POST">
		<p><input type="password" name="oldpass">Введите старый пароль</p>
		<p><input type="password" name="newpass">Введите новый пароль</p>
		<p><input type="password" name="newpass_confirm">Повторите новый пароль</p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST['oldpass']) and !empty($_POST['newpass']) and !empty($_POST['newpass_confirm'])){
		$oldpass = $_POST['oldpass'];
		
		if(password_verify($oldpass, $data['pass'])){
			if($_POST['newpass'] === $_POST['newpass_confirm']){
				$newpass = password_hash($_POST['newpass'], PASSWORD_DEFAULT);
				
				$query = "UPDATE auth SET pass = '$newpass' WHERE id = '$id'"; 
				$result = mysqli_query($link, $query) or die(mysqli_error($link));
				echo 'Пароль изменен';
				?> <p><a href="index.php">На главную</p> <?php
			} else {
				echo 'Не верный пароль подтверждения';
			}
		} else {
			echo 'Введите верный старый пароль';
		}
	}