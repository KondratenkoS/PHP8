<?php
	/*
		Пусть на странице index.php можно передать число с помощью
		GET параметра с именем num. Сделайте так, чтобы при заходе
		без данного параметра, автоматически выполнялся редирект
		на эту же страницу, но с параметром num в значении 1.
	*/
	
	if(!isset($_GET['num'])){
		header('Location: index.php?num=1');
	} else {
		echo $_GET['num'];
	}