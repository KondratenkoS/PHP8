<?php
	class User{
		private $name;
		private $age;
		
		public function __construct($name, $age){
			$this->name = $name;
			$this->age = $age;
		}
		
		public function __get($value){
			return $this->$value;
		}
	}