<?php
	/*
		(Задача)Найдите все даты, отделив год, месяц и день в отдельные карманы.
		Модифицируйте предыдущую задачу так, чтобы в первый подмассив
		попала первая дата с ее карманами, во второй подмассив -
		вторая с ее карманами и так далее.
	*/
	$str = '2023-10-29 2024-11-30 2025-12-31';
	$reg = '/([01-9]+)\-([01-9]+)\-([01-9]+)/';
	preg_match_all($reg, $str, $res, PREG_SET_ORDER);
	var_dump($res);