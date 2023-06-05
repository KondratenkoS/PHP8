<?php
	require_once '../connection/connection.php';
	require 'functions.php';
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
		<?php
			if(!empty($_POST['login'])){
				if(!validateLogin($_POST['login'])){
					echo '<h5>Логин должен быть латинскими буквами, и длинной от 4-ч до 10-ти символов.</h5>';
				}
			}	
		?>
		<p><input name="login" value="<?= $_POST['login'] ?? '' ?>"> Введите Login</p>
		<?php
			if(!empty($_POST['name'])){
				if(!validateName($_POST['name'])){
					echo '<h5>В имени допущена ошибка</h5>';
				}
			}	
		?>
		<p><input name="name" value="<?= $_POST['name'] ?? '' ?>"> Введите имя</p>
		<?php
			if(!empty($_POST['surname'])){
				if(!validateName($_POST['surname'])){
					echo '<h5>В фамилии допущена ошибка</h5>';
				}
			}	
		?>
		<p><input name="surname" value="<?= $_POST['surname'] ?? '' ?>"> Введите фамилию</p>
		<?php
			if(!empty($_POST['patronymic'])){
				if(!validateName($_POST['patronymic'])){
					echo '<h5>В отчестве допущена ошибка</h5>';
				}
			}	
		?>
		<p><input name="patronymic" value="<?= $_POST['patronymic'] ?? '' ?>"> Введите отчество</p>
		
		<?php
			if(!empty($_POST['date_birthday'])){
				if(!validateDate($_POST['date_birthday'])){
					echo '<h5>Введите дату в формате 31-12-2000.</h5>';
				}
			}	
		?>
		<p><input name="date_birthday" value="<?= $_POST['date_birthday'] ?? date('d-m-Y') ?>"> Введите дату рождения</p>
		
		<?php
			if(!empty($_POST['email'])){
				if(!validateEmail($_POST['email'])){
					echo '<h5>Вы ввели не корректный email.</h5>';
				}
			}	
		?>
		<p><input name="email" value="<?= $_POST['email'] ?? '' ?>"> Введите email</p>
		<?php
			if(!empty($_POST['pass'])){
				if(!validateName($_POST['pass'])){
					echo '<h5>Пароль должен быть латинскими буквами, и длинной от 6-ти до 12-ти символов.</h5>';
				}
			}	
		?>
	
		<p><input name="pass" type="password"> Введите пароль</p>
		<p><input name="confirm" type="password"> Подтвердите пароль</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		$login = validateLogin($_POST['login']);
		$name = validateName($_POST['name']);
		$surname = validateName($_POST['surname']);
		$patronymic = validateName($_POST['patronymic']);
		
		if(validateDate($_POST['date_birthday'])){
			$date_birthday = $_POST['date_birthday'];
		}
		$email = validateEmail($_POST['email']);
		$pass = password_hash(validatePass($_POST['pass']), PASSWORD_DEFAULT); // хешируем пароль
		
		if(!empty($name) and !empty($pass) and !empty($_POST['confirm'])){
			
			$query = "SELECT * FROM auth WHERE name = '$name'";
			$result = mysqli_fetch_assoc(mysqli_query($link, $query));
				if(empty($result)){
					if($_POST['pass'] === $_POST['confirm']){
					$registration_date = date('Y-m-d'); // дата регистрации
					$query = "INSERT INTO auth SET registration_date = '$registration_date', login = '$login', name = '$name', 
							  surname = '$surname', patronymic = '$patronymic', date_birthday = '$date_birthday',
						  email = '$email', pass = '$pass', status = 'user'";
					mysqli_query($link, $query);
					$id = mysqli_insert_id($link); // получаем id последней вставленной записи
					
					$_SESSION['auth'] = true; // пользователь автоматически становится авторизированным после регистрации
					$_SESSION['id'] = $id; // записываем id в сессию
					$_SESSION['status'] = $result['status']; // записываем status в сессию
					$_SESSION['login'] = $login;
					
					header('Location: index.php');
					die();
				} else {
					echo 'Пароль не совпадает, проверьте';
				}
			} else {
				echo 'Имя не доступно. Выбирите другое.';
			}	
		} else {
			echo 'Заполните все поля.';
		}
	}
