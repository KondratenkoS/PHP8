<?php
	class Circle{
		private $radius;
		const PI = 3.14;
		
		public function __construct($radius){
			$this->radius = $radius;
		}
		
		
		public function getSquare()
		{
			return self::PI * ($this->radius * $this->radius);
		}
		
		public function getCircuit()
		{
			return self::PI * self::PI * $this->radius;
		}
	}