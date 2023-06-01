<?php
	/*
		#1
		Пусть при регистрации мы спрашивали у пользователя логин, 
		пароль, имя, отчество, фамилию, дату рождения. Выведите в 
		профиле пользователя все эти данные, кроме пароля.
		#2
		Модифицируйте предыдущую задачу так, чтобы вместо даты 
		рождения показывался текущий возраст пользователя.
	*/
	require_once '../connection/connection.php';
	session_start();

	if(!empty($_SESSION['auth'])){
		
		$query = "SELECT * FROM auth WHERE login = '$_SESSION[login]'"; 
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		$data = mysqli_fetch_assoc($result);
		//for($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);
		//var_dump($data);
		
		echo 'Ваш Login: ' . $data['login'] . '<br>';
		echo 'Ваше имя: ' . $data['name'] . '<br>';
		echo 'Ваша фамилия: ' . $data['surname'] . '<br>';
		echo 'Ваше отчество: ' . $data['patronymic'] . '<br>';
		echo 'Ваша дата рождения: ' . $data['date_birthday'] . '<br>';
		echo 'Ваш возраст: ' . currentAge($data['date_birthday']) . ' года(лет)<br>';
		?>
			<p><a href="account.php">Редактировать профиль</p>
		<?php
	} else {
		?>
			<p><a href="login.php">Пройдите авторизацию</p>
		<?php
	}
	
	function currentAge($date){
		$date1 = date_create($date);
		$date2 = date_create(date('d-m-Y'));
			
		$diff = date_diff($date1, $date2);
		return $diff->format('%y лет');
	}