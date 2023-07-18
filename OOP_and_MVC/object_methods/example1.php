<?php
	/*
		Не подсматривая в мой код реализуйте такой же класс User с методом show().
	*/
	$user = new User;
	$user->show();
	
	
	class User{
		public $name;
		public $age;
		
		public function show(){
			echo '!!!';
		}
	}