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
	<h1>Ваш аккаунт будет удален</h1>
	<h3>Если вы уверены введите данные</h3>
	<form action="" method="POST">
		<p><input type="password" name="pass">Введите пароль</p>
		<p><input type="password" name="pass_confirm">Подтвердите пароль</p>
		<input type="submit">
	</form>
<?php
	if(!empty($_POST['pass']) and !empty($_POST['pass_confirm'])){
		$pass = $_POST['pass'];
		$passConfirm = $_POST['pass_confirm'];
		
		if($pass === $passConfirm){
			if(password_verify($pass, $data['pass'])){
				$query = "DELETE FROM auth WHERE id = '$id'";
				mysqli_query($link, $query) or die(mysqli_error($link));
				
				$_SESSION['auth'] = null;
				$_SESSION['flash'] = 'Ваш аккаунт удален.';
				header('Location: index.php');
				die();
			} else {
				echo 'Не верный пароль.';
			}
		}
	}