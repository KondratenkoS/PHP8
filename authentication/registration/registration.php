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
		#5
		Запишите при регистрации в сессию еще и id пользователя.
		#6
		Модифицируйте ваш код так, чтобы при отправке формы пароль
		сравнивался с его подтверждением. Если они совпадают - то 
		продолжаем регистрацию, а если не совпадают - то выводим
		сообщение об этом.
		#7
		Модифицируйте ваш код так, чтобы при попытке регистрации выполнялась
		проверка на занятость логина и, если он занят, - выводите сообщение
		об этом и просите ввести другой логин.
		#8
		Модифицируйте ваш код так, чтобы нельзя было зарегистрировать
		пользователя с пустым логином или паролем.
		#9
		Модифицируйте ваш код так, чтобы логин мог содержать только латинские
		буквы и цифры. В случае, если это не так, выводите сообщение об этом над формой.
		#10
		Модифицируйте ваш код так, чтобы логин был длиной от 4 до 10 символов. В случае,
		если это не так, выводите сообщение об этом над формой.
		#12
		Модифицируйте ваш код так, чтобы пароль был длиной от 6 до 12 символов.
		В случае, если это не так, выводите сообщение об этом над формой.
		#13
		Модифицируйте ваш код так, чтобы, если логин или пароль вбиты некорректно,
		над соответствующим инпутом выводилось сообщение об этом.
		#14
		Спросите у пользователя при регистрации еще и email. Занесите его в базу данных.
		Выполните проверку емейла на корректность и, если он некорректен, над
		соответствующим инпутом выведите сообщение об этом.
		#15
		Спросите у пользователя при регистрации еще и дату рождения в формате день.месяц.год.
		Занесите дату в базу данных. Выполните проверку даты на соответствие формату.
		#16
		Спросите у пользователя при регистрации еще и страну проживания. Предложите ему
		выбрать одну из стран с помощью выпадающего списка select.
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
		<?php
			if(!empty($_POST['name'])){
				if(!validateName($_POST['name'])){
					echo '<h5>Имя должно быть латинскими буквами, и длинной от 4-ч до 10-ти символов.</h5>';
				}
			}	
		?>
		<p><input name="name" value="<?= $_POST['name'] ?? '' ?>"> Введите имя</p>
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
		<select name="country">
			<option value="USA">USA</option>
			<option value="China">China</option>
			<option value="Ukraina">Ukraina</option>
			<option value="Great Britain">Great Britain</option>
		</select>
		<p><input name="pass" type="password"> Введите пароль</p>
		<p><input name="confirm" type="password"> Подтвердите пароль</p>
		<p><input type="submit"></p>
	</form>
<?php
	if(!empty($_POST)){
		$name = validateName($_POST['name']);
		if(validateDate($_POST['date_birthday'])){
			$date_birthday = $_POST['date_birthday'];
		}
		$email = validateEmail($_POST['email']);
		$country = $_POST['country'];
		$pass = validatePass($_POST['pass']);
		
		if(!empty($name) and !empty($pass) and !empty($_POST['confirm'])){
			
			$query = "SELECT * FROM auth WHERE name = '$name'";
			$result = mysqli_fetch_assoc(mysqli_query($link, $query));
				if(empty($result)){
					if($_POST['pass'] === $_POST['confirm']){
					$registration_date = date('Y-m-d'); // дата регистрации
					$query = "INSERT INTO auth SET registration_date = '$registration_date', name = '$name', date_birthday = '$date_birthday',
						  email = '$email', country = '$country', pass = '$pass'";
					mysqli_query($link, $query);
					$id = mysqli_insert_id($link); // получаем id последней вставленной записи
					
					$_SESSION['auth'] = true; // пользователь автоматически становится авторизированным после регистрации
					$_SESSION['id'] = $id; // записываем id в сессию
					
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
	
	function validateName($post){
		if(preg_match('/^[a-zA-Z0-9]{4,10}$/', validateData($post))){ 
			return $post;
		}
	}

	function validatePass($post){
		if(preg_match('/^[a-zA-Z0-9]{6,12}$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateEmail($post){
		if(preg_match('/^[A-Za-z0-9]+@[a-z]+.[a-z]+$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateDate($date, $format = 'd-m-Y'){
			$d = DateTime::createFromFormat($format, $date);
			return $d && $d->format($format) == $date;
	}
	
	function validateBornDate($post){
		if(preg_match('/^[\w]{2,}-[\w]{2,}-[\w]{4,}$/', validateData($post))){ 
			return $post;
		}
	}
	
	function validateData($post){
		$post = trim($post);
		$post = stripslashes($post);
		$post = strip_tags($post);
		$post = htmlspecialchars($post);
		return $post;
	}