<?php
	session_start();
	require_once '../connection/connection.php';
	
	if(!empty($_SESSION['auth'])){
	$id = $_SESSION['id'];
	$query = "SELECT * FROM auth WHERE id = '$id'"; 
	$result = mysqli_query($link, $query) or die(mysqli_error($link));
	$data = mysqli_fetch_assoc($result);
	//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
	//var_dump($data);
	
	?>
	
	<form action="" method="POST">
		<h3>Страница редактирования профиля</h3>
		<p><input name="login" value="<?= $data['login'] ?? '' ?>"> Введите новый login(Внимание, важно для входа в аккаунт!)</p>
		<p><input name="name" value="<?= $data['name'] ?? '' ?>"> Введите новое имя</p>
		<p><input name="surname" value="<?= $data['surname'] ?? '' ?>"> Введите новую фамилию</p>
		<p><input name="patronymic" value="<?= $data['patronymic'] ?? '' ?>"> Введите новое отчество</p>
		<p><input name="date_birthday" value="<?= $data['date_birthday'] ?? '' ?>"> Введите новую дату рождения</p>
		<p><input name="email" value="<?= $data['email'] ?? '' ?>"> Введите новый email</p>
		<input type="submit">
		<p><a href="changePass.php">Смена пароля</p>
		<p><a href="delete.php">Удалить аккаунт</p>
		<p><a href="index.php">На главную</p>
	</form>
	
<?php	} else {
	echo 'Пройдите авторизацию';
}
		
	if(!empty($_POST['login']) and !empty($_POST['name']) and !empty($_POST['surname'])
		and !empty($_POST['patronymic']) and !empty($_POST['email'])){
			$login = $_POST['login'];	
			$name = $_POST['name'];
			$surname = $_POST['surname'];
			$patronymic = $_POST['patronymic'];
			$email = $_POST['email'];
			
			$query = "UPDATE auth SET login = '$login', name = '$name', surname = '$surname',
						patronymic = '$patronymic', email = '$email' WHERE id = $id"; 
			$result = mysqli_query($link, $query) or die(mysqli_error($link));
			
			header('Location: account.php');
		}