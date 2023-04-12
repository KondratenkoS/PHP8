<?php
	/*
		Создайте массив $user с ключами 'name', 'surname', 'patronymic'
		и какими-то произвольными значениями. Выведите на экран фамилию,
		имя и отчество через пробел.
	*/
	$user = ['name' => 'Сергей',
			 'surname' => 'Кондратенко',
			 'patronymic' => 'Александрович'];
	echo $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];