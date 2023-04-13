<?php
	/*
		С помощью цикла foreach выведите на экран столбец строк такого формата: user1 - возраст 30 лет.
	*/
	$arr = ['user1' => 30, 'user2' => 32, 'user3' => 33];
	
	foreach($arr as $key => $val){
		echo $key . ' - возраст ' . $val . ' лет.<br>';
	}