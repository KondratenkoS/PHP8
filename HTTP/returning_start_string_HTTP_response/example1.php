<?php
	/*
		Допишите код так, чтобы отдавался заголовок 404 ошибки:
			$arr = ['a', 'b', 'c'];
			$key = $_GET['key'];
			
			if (isset($arr[$key])) {
				echo $arr[$key];
			} else {
				// отдать 404
				echo 'error';
			}
	*/
	$arr = ['a', 'b', 'c'];
	$key = $_GET['key'];
			
		if (isset($arr[$key])) {
			echo $arr[$key];
		} else {
			http_response_code(404);
			echo 'error';
		}