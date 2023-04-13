<?php
	/*
		Найдите произведение целых чисел от 1 до 20.
	*/
	$result = 1;
	for($i = 1; $i <= 20; $i++){
		$result = $result * $i;
		echo $i . ') ' . $result . '<br>';
	}