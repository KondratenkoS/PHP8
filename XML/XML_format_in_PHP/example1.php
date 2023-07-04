<?php
	/*
		Сделайте тестовый XML файл. Получите его в PHP. Выведите результат получения через var_dump.
	*/
	
	$xml = simplexml_load_file('test.xml');
	echo $xml->test.'<br>';
	echo $xml->test2.'<br>';
	var_dump($xml);