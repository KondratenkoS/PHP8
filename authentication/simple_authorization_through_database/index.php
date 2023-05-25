<?php
	
	//echo 'Это страница - index.php. Вы авторизированы'; // результат 3-й задачи
	
	
	// результат 4-й задачи
	session_start();
	
	if(isset($_SESSION['flash'])){
		echo $_SESSION['flash'];
		unset($_SESSION['flash']);
	}