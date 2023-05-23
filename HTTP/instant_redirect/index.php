<?php
	/*
		При заходе на страницу index.php выполните редирект на страницу page.php.
	*/
	$a = 10;
	$b = 9;
	if($a == $b){
		header('Location: test.php');
		die;
	} else {
		echo 'Всеравно выполнюсь';
	}