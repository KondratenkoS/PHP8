<?php
	/*
		Дана строка, содержащая имена функций:
		$str = 'func1() func2() func3()';
		Получите массив имен функций из строки.
	*/
	$str = 'func1() func2() func3()';
	$reg = '/[a-z]+\d(?=\(\))/';
	preg_match_all($reg, $str, $res);
	print_r($res);