<?php
	/*
		На одной странице с помощью формы спросите у пользователя
		фамилию, имя и возраст. Запишите эти данные в сессию. При
		заходе на другую страницу выведите эти данные на экран.
	*/
	session_start();
	if(!empty($_POST)){
			$_SESSION['name'] = $_POST['name'];
			$_SESSION['surname'] = $_POST['surname'];
			$_SESSION['age'] = $_POST['age'];
	}
	var_dump($_SESSION);
	//session_destroy();
?>
	<form action="" method="POST">
		<p><input name="name" value="<?= $_POST['name'] ?? '' ?>"> Имя</p>
		<p><input name="surname" value="<?= $_POST['surname'] ?? '' ?>"> Фамилия</p>
		<p><input name="age" value="<?= $_POST['age'] ?? '' ?>"> Возраст</p>
		<p><input type="submit"></p>
	</form>

	