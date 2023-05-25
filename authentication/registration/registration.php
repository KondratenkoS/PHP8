<?php
	/*
		№1
		Реализуйте регистрацию. После этого зарегистрируйте
		нового пользователя и авторизуйтесь под ним. 
		Убедитесь, что все работает, как надо.
		№2
		Модифицируйте ваш код так, чтобы кроме логина и пароля
		пользователю нужно было ввести еще и дату своего рождения
		и email. Сохраните эти данные в базу данных.
		№3
		Модифицируйте ваш код так, чтобы в базу автоматически
		сохранялась дата регистрации.
		#4
		Модифицируйте ваш код так, чтобы после регистрации
		пользователь автоматически становился авторизованным.
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
?>
	<form action="" method="POST">
		<h3>Заполните форму для регистрации</h3>
		<p><input name="name" value=" <?= $_POST['name'] ?? '' ?> "> Введите имя</p>
		<p><input name="date_birthday" value=" <?= $_POST['date_birthday'] ?? '' ?> "> Введите дату рождения</p>
		<p><input name="email" value=" <?= $_POST['email'] ?? '' ?> "> Введите email</p>
		<p><input name="pass" type="password"> Введите пароль</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		$name = $_POST['name'];
		$date_birthday = $_POST['date_birthday'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		if(!empty($_POST['name']) and !empty($_POST['pass'])){
			$registration_date = date('Y-m-d'); // дата регистрации
			$query = "INSERT INTO auth SET registration_date = '$registration_date', name = '$name', date_birthday = '$date_birthday',
				  email = '$email', pass = '$pass'";
			mysqli_query($link, $query);
			$_SESSION['auth'] = true; // пользователь автоматически становится авторизированным после регистрации
			header('Location: index.php');
			die();
		} else {
			echo 'Заполните все поля';
		}
	}