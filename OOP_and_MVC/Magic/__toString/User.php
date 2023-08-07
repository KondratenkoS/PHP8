<?php
	class User{
		public $name;
		public $surname;
		public $patronymic;
		
		public function __construct($name, $surname, $patronymic){
			$this->name = $name;
			$this->surname = $surname;
			$this->patronymic = $patronymic;
		}
		
		public function __toString(){
			return $this->name . ' ' . $this->surname . ' ' . $this->patronymic;
		}
	}