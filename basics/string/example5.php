<?php
	/*
		Запишите в переменную какую-нибудь кириллическую строку.
		Выведите на экран длину вашей строки.
	*/
	$a = 'ывломосимшчсило тилос';
	
	echo mb_strlen($a);