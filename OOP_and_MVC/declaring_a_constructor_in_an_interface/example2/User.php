<?php
require_once 'iUser.php';
	class User implements iUser{
		private $name;
		private $age;
		
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
		public function getName(){
			return $this->name;
		}
		
		public function getAge(){
			return $this->age;
		}
	}