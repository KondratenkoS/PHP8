<?php
	/*
		Разберите мое решение описанной задачи, а затем самостоятельно,
		не подсматривая в мой код, решите эту задачу.
	*/
	$one = 0;
	$two = 1;
	
	for ($i = 1; $i <= 10; $i++) {
		$current = $one + $two;
		
		$one = $two;
		$two = $current;
		
		echo $current . '<br>';
	}