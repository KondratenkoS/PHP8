<?php
	/*
		Перепишите следующий код через изученный оператор:
	$user = ['name' => 'john', 'age' => 30];
	
	if (isset($user['name'])) {
		$name = $user['name'];
	} else {
		$name = 'unknown';
	}
	*/
	
	$user = ['name' => 'john', 'age' => 30];
	$name = $user['name'] ?? 'unknown';
	echo $name;