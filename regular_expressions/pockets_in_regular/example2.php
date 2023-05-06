<?php
	/*
		Дана строка:
		$str = 'a aa aaa abab bbbb';
		Найдите все подстроки, в которых есть две и более одинаковые буквы подряд.
	*/
	$str = 'a aa aaa abab bbbb';
	$reg = '/([a-z])+\1/';
	echo preg_replace($reg, '!', $str);