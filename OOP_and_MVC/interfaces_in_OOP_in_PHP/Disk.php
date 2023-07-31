<?php
	require_once 'iFigure.php';
	
	class Disk implements iFigure{
		private $r;
		const P = 3.14;
		
		public function __construct($r){
			$this->r = $r;
		}
		
		public function getSquare(){
			return self::P * ($this->r * $this->r);
		}
		
		public function getPerimeter(){
			return 2 * self::P * $this->r;
		}
	}