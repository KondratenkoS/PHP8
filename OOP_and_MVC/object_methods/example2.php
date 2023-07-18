<?php
	/*
		Не подсматривая в мой код реализуйте такой же класс User с методом show().
	*/
	$user = new User;
	$user->name = 'Hell';
	$user->age = 34;
	$user->show('Hello');
	$user->show($user->name);
	echo 'Мне ';
	$user->show($user->age);
	
	class User{
		public $name;
		public $age;
		
		public function show($str){
			echo $str . '!!!<br>';
		}
	}