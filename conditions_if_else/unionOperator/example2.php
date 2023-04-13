<?php
	/*
		Перепишите следующий код через изученный оператор:
		
	if (isset($user['name'])) {
		$result = $user['name'];
	} elseif (isset($user['surname'])) {
		$result = $user['surname'];
	} else {
		$result = '';
	}
	*/
	$user = ['name' => 'john', 'age' => 30];
	$result = $user['name'] ?? $user['surname'] ?? 'неть';
	echo $result;