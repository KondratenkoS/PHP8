<?php
	abstract class User{
		private $name;
		
		public function setName($name){
			$this->name = $name;
		}
		
		public function getName(){
			return $this->name;
		}
		
		abstract public function increaseRevenue($value);
		abstract public function decreaseRevenue ($value);
	}