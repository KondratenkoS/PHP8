<?php
	/*
		Реализуйте флеш сообщения. Проверьте их работу.
	*/
	session_start();
	
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
	}