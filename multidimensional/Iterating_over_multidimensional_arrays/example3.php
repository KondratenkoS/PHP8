<?php
	/*
		Выведите элементы этого массива в формате ключ-значение.
	*/
	$arr = [
		[
			'name'   => 'user1',
			'age'    => 30,
			'salary' => 1000,
		],
		[
			'name'   => 'user2',
			'age'    => 31,
			'salary' => 2000,
		],
		[
			'name'   => 'user3',
			'age'    => 32,
			'salary' => 3000,
		],
	];
	foreach($arr as $elem){
		foreach($elem as $key => $value){
			echo $key . ' ' . $value . '<br>';
		}
	}