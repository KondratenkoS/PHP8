<?php

	//var_dump($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	//var_dump($_SERVER['HTTP_ACCEPT']);

	echo $_SERVER['HTTP_X_TEST'].'<br>';
	
	if ($_SERVER['HTTP_X_TEST'] === '12345') {
		echo 'result';
	} else {
		echo 'error';
	}