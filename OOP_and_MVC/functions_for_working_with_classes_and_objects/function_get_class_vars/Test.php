<?php
	class Test{
		public $prop1 = 'value1';
		public $prop2 = 'value2';
		private $prop3 = 'value3';
		private $prop4 = 'value4';
		
		public function __construct(){
			get_class_vars(__CLASS__);
		}
	}