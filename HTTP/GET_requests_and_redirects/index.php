<?php
	/*
		Пусть на странице index.php можно передать GET параметр с именем success.
		Сделайте так, чтобы при наличии такого параметра, на страницу выводилось
		сообщение об успехе операции.
	*/
	//header('Location: index.php?success'); // раскоментировать для проверки задачи с action.php
	
	if(isset($_GET['success'])){
		echo 'Операция успешна';
	}