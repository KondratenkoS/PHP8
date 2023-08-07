<?php
	class User{
		private $name;
		private $age;
		
		public function __set($prop, $value){
			switch($prop){
				case 'name':
					if($value != ''){
						$this->$prop = $value;
					}
				break;
				
				case 'age':
					if($value >= 0 and $value <= 70){
						$this->$prop = $value;
					}
				break;
				default:
					// Такого свойства нет
				break;
			}
		}
		
		public function __get($prop){
			return $this->$prop;
		}
		
		
	}