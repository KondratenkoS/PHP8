<?php
	/*
		С помощью двух вложенных циклов выведите элементы 
		этого массива в формате имя группы - имя юзера.
	*/
	$arr = [
		'group1'  => ['user11', 'user12', 'user13', 'user43'],
		'group2'  => ['user21', 'user22', 'user23'],
		'group3'  => ['user31', 'user32', 'user33'],
		'group4'  => ['user41', 'user42', 'user43'],
		'group5'  => ['user51', 'user52'],
	];
	foreach($arr as $key => $value){
		foreach($value as $elem){
			echo $key . ' ' . $elem . '<br>';
		}
	}