<?php
	class User{
		private $name = 'Hell';
		private $age = 34;
		
		public function getName(){
			return $this->name;
		}
		
		public function getAge(){
			return $this->age;
		}
	}