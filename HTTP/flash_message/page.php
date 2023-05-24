<?php
	session_start();
	
	$_SESSION['flash'] = 'Сообщение';
	header('Location: index.php');
	die();