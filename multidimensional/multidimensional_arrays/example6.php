<?php
	/*
		Выведите с помощью этого массива сумму зарплат первого и третьего юзера.
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
	
	echo $arr[0]['salary'] + $arr[2]['salary'] . '<br>';