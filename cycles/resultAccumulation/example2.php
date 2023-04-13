<?php
	/*
		Найдите сумму четных чисел от 2 до 100.
	*/
	$result = 0;
	for($i = 0; $i <= 100; $i += 2){
		$result += $i;
		echo $i . ')' . $result . '<br>';
	}
	