<?php
header('X-HELLO-WORLD: ZDRASTE');
	/*
		Придумайте свой заголовок, начав его имя с буквы 'X'.
		Установите этот заголовок.
	*/
	$headers = getallheaders();
	//var_dump($headers);
	
	foreach($headers as $header => $value){
		echo $header . ': ' . $value . '<br>';
	}