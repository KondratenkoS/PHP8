<?php
require_once 'iFigure.php';
	class Quadrate implements iFigure{
		private $a;
		
		public function __construct($a){
			$this->a = $a;
		}
		
		public function getSquare(){
			return $this->a * 2;
		}
		
		public function getPerimetr(){
			return $this->a * 4;
		}
	}