<?php
	/*
		#1
		Реализуйте страницу logout.php, зайдя на которую,
		пользователь перестанет быть авторизованным.
		№2
		Модифицируйте предыдущую задачу так, чтобы страница
		logout.php после выполнения своего кода выполняла 
		редирект на index.php. Покажите на этой странице
		сообщение о том, что пользователь перестал быть авторизованным.
	*/
	session_start();
	$_SESSION['auth'] = null;
	header('Location: index.php');
	die();