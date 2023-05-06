<?php
	/*
		Дана строка:
		$str = 'aaa aaa bbb bbb ccc ddd';
		Найдите все подстроки, в которых есть два одинаковых слова подряд.
	*/
	$str = 'aaa aaa bbb bbb ccc ddd';
	$reg = '/([a-z]+)\s\1/';
	echo preg_replace($reg, '!', $str);