<?php
	/*
		Получите массив заголовков. Переберите этот массив циклом
		и выведите на экран имена заголовков и их значения.
	*/
	$headers = getallheaders();
	//var_dump($headers);
	
	foreach($headers as $header => $value){
		echo $header . ': ' . $value . '<br>';
	}