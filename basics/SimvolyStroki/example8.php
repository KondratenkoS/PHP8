<?php
	/*
		Дано число 12345. Переставьте цифры этого числа в обратном порядке.
	*/
	
	$num = 12345;
	echo $num . '<br>';
	$num = (string)$num;
	echo $num[4] . $num[3] . $num[2] . $num[1] . $num[0];