<?php
	class Quadrate{
		private $a;
		
		public function __construct($a){
			$this->a = $a;
		}
		
		public function getVolume(){
			return $this->a * $this->a * $this->a;
		}
		
		public function getSurfaceSquare(){
			return 6 * ($this->a * 2);
		}
	}