<?php
	/*
		Дана следующая функция:
		function func($a, $b) {
			if ($a !== $b) {
				return true;
			} else {
				return false;
			}
		}
		Перепишите ее код в сокращенной форме согласно изученной теории.
	*/
	echo func(10, 11);
	
	function func($a, $b) {
		if ($a !== $b)
			return true;
	}