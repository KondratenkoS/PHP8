<?php
	class User{
		public $name;
		private static $count;
		
		public function __construct($name){
			$this->name = $name;
			++self::$count;
		}
		
		public static function getCount(){
			return self::$count;
		}
	}