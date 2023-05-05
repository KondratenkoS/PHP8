<?php
	/*
		Определите, заканчивается ли переданная 
		строка расширением txt, html или php.
	*/
	$str = 'ashgdhxc.txt';

	echo preg_match('/.txt|.html|.php$/', $str);