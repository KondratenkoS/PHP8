<?php
	/*
		Выведите на экран следующую пирамидку:
		x
		xx
		xxxx
		xxxxxx
		xxxxxxxx
		xxxxxxxxxx
	*/
	$a = '';
	for($i = 0; $i <= 10; $i++){
		$a .= 'x';
		echo $a . '<br>';
	}