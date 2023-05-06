<?php
	/*
		Дана строка:
		$str = 'aaa bbb ccc xyz';
		Найдите все подстроки, в которых есть три одинаковые буквы подряд.
	*/
	$str = 'aaa bbb ccc xyz';
	$reg = '/([a-z])([a-z])\1/';
	echo preg_replace($reg, '!', $str);