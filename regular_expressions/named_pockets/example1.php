<?php
	/*
		Дана строка со временем:
		$str = '12:59:59';
		Положите часы, минуты и секунды в отдельные именованные карманы.
	*/
	$str = '12:59:59';
	$reg = '/(?<houers>[01-9]{2}):(?<minutes>[01-9]{2}):(?<seconds>[01-9]{2})/';
	preg_match($reg, $str, $result);
	print_r($result);