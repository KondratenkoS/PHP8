<?php
	/*
		Реализуйте страницу save.php для сохранения результата редактирования.
	*/
	require_once '../mysqli_connect/connection.php';
	//var_dump($_POST);
	if(!empty($_POST)){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$age = $_POST['age'];
		$salary = $_POST['salary'];
		
		$query = "UPDATE users SET name = '$name', age = '$age', salary = '$salary'
					WHERE id = $id";
		$result = mysqli_query($link, $query) or die(mysqli_error($link));
		
		echo 'Данные обновлены';
	} else {
		echo 'Данные не обновлены';
	}