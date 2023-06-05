<?php
	session_start();
	require_once '../connection/connection.php';
	
	if($_SESSION['status'] === 'admin' and !empty($_GET['id'])){
			$query = "SELECT login FROM auth WHERE id = '$_GET[id]'";
			mysqli_query($link, $query) or die(mysqli_error($link));
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			$login = mysqli_fetch_assoc($result);
	?>
		<h3>Пользователь <?= $login['login']; ?> будет удален</h3>
		<form action="" method="POST">
			<input type="submit" name="delete" value="Удалить">
		</form>
	
<?php }

		if(!empty($_POST['delete'])){
			$query = "DELETE FROM auth WHERE id = '$_GET[id]'";
			mysqli_query($link, $query) or die (mysqli_error($link));
			
			$_SESSION['flash'] = "Пользователь $login[login] удален.";
			header('Location: /php8/authentication/profile/admin.php');
			die();
		}