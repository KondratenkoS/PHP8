<?php
	/*
		Дана строка с датой:
		$str = 'index.html';
		Положите имя файла и его расширение в отдельные карманы.
	*/
	$str = 'index.html';
	
	$reg = '/([a-z]+)\.([a-z]+)/';
	preg_match($reg, $str, $result);
	var_dump($result);