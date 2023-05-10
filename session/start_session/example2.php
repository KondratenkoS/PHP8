<?php
	// выводим данные записанные в сессии в example1.php
	session_start();
	echo array_sum($_SESSION);