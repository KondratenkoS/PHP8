<?php
	require_once 'User.php';
	
	class Student extends User{
		public function setName($name){
			if(strlen($name) < 10){
				parent::setName($name);
			}
		}
	}