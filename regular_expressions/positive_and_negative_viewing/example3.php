<?php
	/*
		Дана строка с переменными:
		$str = '$aaa $bbb $ccc';
		Получите массив имен переменных из этой строки (без доллара).
	*/
	$str = '$aaa $bbb $ccc';
	$reg = '/(?<!$)[a-z]+/';
	preg_match_all($reg, $str, $res);
	print_r($res);