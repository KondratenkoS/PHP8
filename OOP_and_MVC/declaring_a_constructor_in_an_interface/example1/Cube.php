<?php
require_once 'iCube.php';
	class Cube implements iCube{
		private $a;
		
		public function __construct($a){
			$this->a = $a;
		}
		
		public function getCubeVolume(){
			return $this->a * $this->a * $this->a;
		}
		
		public function getSurfaceArea(){
			return 6 * ($this->a * 2);
		}
	}