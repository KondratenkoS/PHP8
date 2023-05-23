<?php
	/*
		Установите заголовок Content-Type в значение 'text/plain'.
	*/
	header('Content-Type: text/plain');
	$headers = getallheaders();
	//var_dump($headers);
	
	foreach($headers as $header => $value){
		echo $header . ': ' . $value . '<br>';
	}