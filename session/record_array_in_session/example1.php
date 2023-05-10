<?php
	/*
		На одной странице с помощью формы спросите у пользователя имя,
		возраст, зарплату и еще что-нибудь. Запишите эти данные в одну
		переменную сессии в виде массива. При заходе на другую страницу
		переберите сохраненные данные циклом и выведите каждый элемент
		массива в своем теге li тега ul.
	*/
	session_start();
	if(!empty($_POST)){
			$_SESSION = $_POST;
	}
	var_dump($_SESSION);
	//session_destroy();
?>
	<form action="" method="POST">
		<p><input name="name" value="<?= $_POST['name'] ?? '' ?>"> Имя</p>
		<p><input name="salary" value="<?= $_POST['salary'] ?? '' ?>"> Зарплата</p>
		<p><input name="age" value="<?= $_POST['age'] ?? '' ?>"> Возраст</p>
		<p><input name="something" value="<?= $_POST['something'] ?? '' ?>"> Что нибуть</p>
		<p><input type="submit"></p>
	</form>